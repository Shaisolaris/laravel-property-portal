<?php

namespace Modules\Payment\app\Traits\Models;

use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

trait HasPaymentTrait
{
    public function pay()
    {
        $user = Auth::user();

        $amount = $this->price;
        $customerOptions = [];

        $priceData = [[
            'price_data' => [
                'currency' => 'USD',
                'product_data' => [
                    'name' => $this->name,
                    'metadata' => [
                        'productID' => Crypt::encryptString($this->uuid),
                        'model' => Crypt::encryptString(get_class($this)),
                        'amount' => $amount,
                    ],
                ],
                'unit_amount' => ceil($amount * 100),
            ],
            'quantity' => 1,
        ]];

        return $user->checkout($priceData, $this->getUrls(), $customerOptions)?->url;
    }


    //    /**
    //     * @throws Exception
    //     */
    //    public function subscribe(User $user)
    //    {
    //        $checkout = $user
    //            ->newSubscription(config('services.stripe.product'), 'price_reughreygryeg')
    //            ->checkout($this->getUrls());
    //
    //        return $checkout?->url;
    //    }


    private function getUrls(): array
    {
        return [
            'success_url' => URL::signedRoute('ei-pay.success', ['model' => $this->uuid]),
            'cancel_url' => URL::signedRoute('ei-pay.fail', ['model' => $this->uuid]),
        ];
    }
}
