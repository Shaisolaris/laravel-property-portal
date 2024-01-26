<?php

namespace Modules\Payment\app\Traits;

use Exception;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;

trait PaymentActionTrait
{
    public function pay(User $user)
    {
        $amount = 10;

        $customerOptions = [];

        $priceData = [[
            'price_data' => [
                'currency' => 'USD',
                'product_data' => [
                    'name' => 'TEST',
                    'metadata' => [
                        'productID' => Crypt::encryptString($this->uuid),
                        'amount' => $amount,
                    ],
                ],
                'unit_amount' => ceil($amount * 100),
            ],
            'quantity' => 1,
        ]];

        return $user->checkout($priceData, $this->getUrls(), $customerOptions)?->url;
    }


    /**
     * @throws Exception
     */
    public function subscribe(User $user)
    {
        $checkout = $user
            ->newSubscription(config('services.stripe.product'), 'price_reughreygryeg')
            ->checkout($this->getUrls());

        return $checkout?->url;
    }


    private function getUrls(): array
    {
        return [
            'success_url' => URL::temporarySignedRoute(
                'payment.success',
                Carbon::now()->addHour(),
                ['question' => $this->uuid]
            ),
            'cancel_url' => URL::temporarySignedRoute(
                'payment.fail',
                Carbon::now()->addHour(),
                ['question' => $this->uuid]
            ),
        ];
    }
}