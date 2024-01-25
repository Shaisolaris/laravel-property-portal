<?php

namespace Modules\Payment\app\Traits;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

trait PayTrait
{
    public function pay(User $user)
    {
        $amount = 10;

        $sessionOptions = [
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

        return $user->checkout($priceData, $sessionOptions, $customerOptions)?->url;
    }
}