<?php

namespace Modules\Payment\app\Services;

use App\Models\User;
use Illuminate\Support\Arr;

class PaymentCredentialService
{
    public function getPaymentCredentials(User $user): \Illuminate\Database\Eloquent\Collection
    {
        return $user->paymentCredentials()->latest()->get();
    }


    public function updateOrCreatePaymentCredentials(User $user, array $data): void
    {
        foreach ($data['cards'] as $card) {
            if (isset($card['uuid'])) {
                $user->paymentCredentials()->update(Arr::except($card, ['uuid']));
            } else {
                $user->paymentCredentials()->create($card);
            }
        }
    }
}