<?php

namespace Modules\Payment\app\Traits\Models\Relationships;

use App\Models\User;
use Modules\Payment\app\Models\Payment;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait TransactionRelationshipsTrait
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


    public function paymentEntity()
    {
        return $this->hasOne(Payment::class, 'transaction_id', 'id');
    }
}
