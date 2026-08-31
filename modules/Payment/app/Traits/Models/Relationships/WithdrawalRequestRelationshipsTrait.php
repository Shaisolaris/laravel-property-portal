<?php

namespace Modules\Payment\app\Traits\Models\Relationships;

use App\Models\User;

trait WithdrawalRequestRelationshipsTrait
{
    public function requesterUser()
    {
        return $this->belongsTo(User::class, 'requester_user_id', 'id');
    }

    public function payerUser()
    {
        return $this->belongsTo(User::class, 'payer_user_id', 'id');
    }
}