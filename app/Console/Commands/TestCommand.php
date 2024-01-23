<?php

namespace App\Console\Commands;

use DateTimeZone;
use App\Models\User;
use App\Facades\Data;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\Http;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    protected $description = 'Command description';

    public function handle(): void
    {
        $accessToken = 'A21AAKrkaD5hKKkxHncd2nrKOc6RoXkQhUryllbS68_WPoezKSzfAtElvHIHYgPQGR9mOalRI93kjNkEN_MmNTeAg8rmrDOZg';
        $clientId = config('services.paypal.client_id');
        $secret = config('services.paypal.client_secret');

//        $response = Http::withBasicAuth($clientId, $secret)->asForm()
//            ->post('https://api-m.sandbox.paypal.com/v1/oauth2/token', [
//                'grant_type' => 'client_credentials',
//            ]);
//        dd($response->json());
//        $response = Http::withHeaders([
//            'Content-Type'  => 'application/json',
//            'Authorization' => 'Bearer ' . base64_encode($accessToken),
//        ])->get('https://api.sandbox.paypal.com/v2/identity/oauth2/userinfo?schema=paypalv1.1');
//
//        dd($response->json());

        $paymentData = [
            'intent' => 'order',
            'redirect_urls' => [
                'return_url' => 'https://www.google.com/',
                'cancel_url' => 'https://www.google.com/'
            ],
            'payer' => [
                'payment_method' => 'paypal'
            ],
            'transactions' => [
                [
                    'amount' => [
                        'total' => '100.00',
                        'currency' => 'USD'
                    ]
                ]
            ]
        ];

        $orderData = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    "reference_id" => Str::uuid()->toString(),
                    'amount' => [
                        'currency_code' => "USD",
                        'value' => "100.00"
                    ]
                ]
            ],
            'application_context' => [
                'return_url' => 'https://www.google.com/',
                'cancel_url' => 'https://www.google.com/'
            ]
        ];

        $orderV1 = [
            'purchase_units' => [
                [
                    'reference_id' => Str::uuid()->toString(),
                    'amount' => [
                        'currency' => "USD",
                        'total' => "100.00"
                    ]
                ],
            ],
            "redirect_urls" => [
                "return_url" => 'https://www.google.com/',
                "cancel_url" => 'https://www.google.com/',
            ]
        ];

        $invoice = [
            "merchant_info" => [
                'email' => 'alex@gmail.com'
            ],
            "total_amount" => [
                'currency' => "USD",
                'value' => "100.00"
            ]
        ];


//        $response = Http::withToken($accessToken)->get('https://api.sandbox.paypal.com/v1/payments/payment');
//        $response = Http::withToken($accessToken)->post('https://api.sandbox.paypal.com/v2/checkout/orders', $orderData);
//        $response2 = Http::withToken($accessToken)->post('https://api.sandbox.paypal.com/v1/payments/payment', $paymentData);
//        $response3 = Http::withToken($accessToken)->post('https://api.sandbox.paypal.com/v1/checkout/orders', $orderV1);
        $response4 = Http::withToken($accessToken)->post('https://api.sandbox.paypal.com/v1/invoicing/invoices/', $invoice);
//        $response5 = Http::withBasicAuth($clientId, $secret)->post('https://api-m.sandbox.paypal.com/v1/invoicing/invoices/INV2-WVBK-9W24-DCRZ-AWY7/send');

        dd(
//            Data::get($response->json(), 'links.1'),
//            Data::get($response2->json(), 'links.1'),
//            Data::get($response3->json(), 'links.1'),
            $response4->json(),
//            $response5->json()
        );

        $data = [
            'amount' => '100',
            'clientPaymentId' => 't-1705953132346',
            'currency' => 'USD',
            'destinationToken' => 'usr-a8cf55a0-6acb-4586-b5f7-c139db17ae05',
            'programToken' => 'prg-1b5f4a38-7345-44d1-9235-23f2b5efe145',
            'purpose' => 'OTHER',
        ];

        $response = Http::withBasicAuth('restapiuser@209393791618', 'Qwerty123456^')
            ->post('https://uat-api.paylution.com/rest/v4/payments', $data);

//        $response = Http::withBasicAuth('restapiuser@209393791618', 'Qwerty123456^')
//            ->get('https://uat-api.paylution.com/rest/v4/transfers');

        dd($response->json());
    }
}
