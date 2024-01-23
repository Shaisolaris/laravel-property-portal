<?php

namespace App\Console\Commands;

use DateTimeZone;
use App\Models\User;
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
