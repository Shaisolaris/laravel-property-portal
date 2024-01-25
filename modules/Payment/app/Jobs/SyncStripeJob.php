<?php

namespace Modules\Payment\app\Jobs;

use App\Models\User;
use App\Facades\Logging;
use Illuminate\Bus\Queueable;
use App\Enums\User\UserRoleEnum;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SyncStripeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct()
    {

    }


    public function handle(): void
    {
        $this->syncCustomers();
    }


    private function syncCustomers(): void
    {
//        $server = new StripeService();
//
//        try {
//            $customers = $server->getCustomers();
//
//            if (!empty($customers)) {
//                foreach ($customers as $customer) {
//                    $user = User::whereEmail($customer['email'])->first();
//
//                    if ($user && $user->hasRole([UserRoleEnum::Instructor()->value, UserRoleEnum::Student()->value])) {
//                        $user->update(['stripe_id' => $customer['id']]);
//                    }
//                }
//            }
//        } catch (\Exception $e) {
//            Logging::createStripeLog("StripeSeeder(syncCustomers) - " . $e->getMessage());
//        }
    }
}
