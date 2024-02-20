<?php

namespace Modules\Payment\app\Jobs;

use Throwable;
use App\Models\User;
use App\Facades\Data;
use App\Facades\Logging;
use App\Facades\Settings;
use Illuminate\Support\Str;
use Laravel\Cashier\Cashier;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Number;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Queue\SerializesModels;
use Modules\Payment\app\Models\Charge;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Payment\app\Models\Transaction;
use Modules\Payment\app\Models\Payment;
use Modules\Payment\app\Enums\ChargeStatusEnum;
use Modules\Payment\app\Enums\TransactionStatusEnum;
use Modules\Payment\app\Enums\ChargeBalanceStatusEnum;

class TransactionJob implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;


    public const CHARGE_TYPE = 'charge.';


    public function __construct(protected string $type, protected array $payload)
    {
        if (Str::contains($type, self::CHARGE_TYPE)) {
            $this->payload = Data::get($payload, 'data.object');
        }
    }

    /**
     * @throws Throwable
     */
    public function handle(): void
    {
        DB::beginTransaction();

        try {
            $customer = Data::get($this->payload, 'customer');

            if ($customer) {
                $this->payload['checkout_session_id'] = $this->getCheckoutSessionId($customer, $this->payload['payment_intent']);

                $productData = $this->getProductData($customer, $this->payload['checkout_session_id']);

                $model = resolve(Crypt::decryptString($productData['model']))->where('uuid', Crypt::decryptString($productData['productID']))->first();

                $isPaid = Data::get($this->payload, 'paid');

                if ($isPaid) {
                    //TODO need call Notification
                    $id = Data::get($this->payload, 'id');

                    if ($id) {
                        $charge = Charge::whereChargeId($id)->first();

                        if (!$charge && $model) {
                            $chargeData = $this->setDataCharge($this->payload, $productData);
                            $newCharge = Charge::create($chargeData);

                            $paymentEntityData = $this->setDataPayment([
                                'chargeId' => $newCharge->id,
                                'customerId' => $customer,
                                'modelType' => $model->getMorphClass(),
                                'modelId' => $model->id,
                                'eiId' => $model->institution->id,
                            ]);

                            /** @var Payment $paymentEntity */
                            $paymentEntity = Payment::create($paymentEntityData);

                            $transactionData = $this->setDataTransaction([
                                'amount' => $chargeData['amount'],
                                'status' => $this->payload['status'],
                                'modelType' => $paymentEntity->getMorphClass(),
                                'modelId' => $paymentEntity->id,
                            ]);

                            Transaction::create($transactionData);
                        }
                    }
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            Logging::createStripeLog("TransactionJob -> " . $e->getMessage());
        }
    }

    private function getCheckoutSessionId(string $customerId, string $paymentIntent): mixed
    {
        $user = $this->getUser($customerId);

        if (!$user) {
            return null;
        }

        $checkoutSession = $user->stripe()->checkout->sessions->all(['payment_intent' => $paymentIntent]);

        if (empty($checkoutSession->data)) {
            return null;
        }

        return Data::get($checkoutSession->data, '0.id');
    }

    private function getProductData(string $customerId, string $checkoutSessionID): ?\Stripe\StripeObject
    {
        $user = $this->getUser($customerId);

        $product = $user->stripe()->checkout->sessions->allLineItems($checkoutSessionID)->data;

        if (count($product) <= 0) {
            return null;
        }

        return Cashier::stripe()->products->retrieve($product[0]['price']['product'])->metadata;
    }

    private function getUser(string $customerId): null|User
    {
        return User::whereStripeId($customerId)->first();
    }

    private function setDataCharge(array $data, mixed $product): array
    {
        return [
            'charge_id' => $data['id'],
            'payment_intent_id' => $data['payment_intent'],
            'checkout_session_id' => $data['checkout_session_id'],
            'payment_method_id' => $data['payment_method'],
            'balance_transaction' => $data['balance_transaction'],
            'status' => ChargeStatusEnum::setStatus($data['status']),
            'balance_status' => ChargeBalanceStatusEnum::setStatus($data['status']),
            'payment_method_details' => $data['payment_method_details'],
            'amount' => $product['amount'] ?? $data['amount'] / 100,
            'commission' => $product['commission'] ?? 0,
            'commission_percent' => $product['commission_percent'] ?? 0,
        ];
    }


    private function setDataTransaction(array $data): array
    {
        return [
            'amount' => $data['amount'],
            'status' => TransactionStatusEnum::setStatus($data['status']),
            'fee' => Settings::percentagePaymentOrganization(),
            'transaction_id' => Str::generateID('TI', 5),
            'model_type' => $data['modelType'],
            'model_id' => $data['modelId'],
        ];
    }


    private function setDataPayment(array $data): array
    {
        $student = User::whereStripeId($data['customerId'])->first();
        $organizer = $student->institution->institution->peoples->where('roleName', UserRoleEnum::Organizer()->value)->first();

        return [
            'charge_id' => $data['chargeId'],
            'student_id' => $student->id,
            'organizer_id' => $organizer->id,
            'instructor_id' => User::withoutRole(UserRoleEnum::Instructor()->value)->inRandomOrder()->value('id'),
            'model_type' => $data['modelType'],
            'model_id' => $data['modelId'],
            'ei_id' => $data['eiId'],
        ];
    }
}
