<?php

namespace Modules\Payment\app\Models;

use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Payment\app\Traits\Models\Relationships\WithdrawalRequestRelationshipsTrait;

class WithdrawalRequest extends Model
{
    use HasUuidTrait, WithdrawalRequestRelationshipsTrait;


    protected $table = 'withdrawal_requests';

    protected $fillable = [
        'type',
        'status',
        'amount',
        'payer_user_id',
        'requester_user_id',
        'payment_credential',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'payment_credential' => 'array'
    ];
}
