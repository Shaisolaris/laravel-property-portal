<?php

namespace Modules\Payment\app\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Payment\app\Models\PaymentCredential;
use Modules\Payment\app\Services\PaymentCredentialService;
use Modules\Payment\app\Http\Resources\PaymentCredentialResource;
use Modules\Payment\app\Http\Requests\UpdateOrCreatePaymentCredentialRequest;

class PaymentCredentialController extends Controller
{
    public function __construct(protected PaymentCredentialService $service)
    {
        parent::__construct();
    }

    public function index()
    {
        return Inertia::render('Payment::Tabs/PaymentCredentialsTab', [
            'paymentCredentials' => PaymentCredentialResource::collection($this->service->getPaymentCredentials($this->user))
        ]);
    }

    public function updateCreate(UpdateOrCreatePaymentCredentialRequest $request)
    {
        try {
            $this->service->updateOrCreatePaymentCredentials($this->user, $request->all());

            return redirect()->to(route('payment.payment-credential.index'))->success(__('success.save_payment_credential'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        try {
            /** @var PaymentCredential $paymentCredential */
            $paymentCredential = $request->route('paymentCredential');

            $paymentCredential->delete();

            return redirect()->to(route('payment.payment-credential.index'))->success(__('success.delete_payment_credential'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
