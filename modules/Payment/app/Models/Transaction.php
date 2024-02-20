<?php

namespace Modules\Payment\app\Models;

use Eloquent;
use App\Models\User;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\Payment\app\Enums\TransactionStatusEnum;
use Modules\Payment\app\Traits\Models\Functions\TransactionFunctionsTrait;
use Modules\Payment\app\Traits\Models\Relationships\TransactionRelationshipsTrait;

/**
 * Modules\Payment\app\Models\Transaction
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string $transaction_id
 * @property string $amount
 * @property string $fee
 * @property Enum|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Payment|null $paymentEntity
 * @property-read User|null $user
 * @method static Builder|Transaction newModelQuery()
 * @method static Builder|Transaction newQuery()
 * @method static Builder|Transaction query()
 * @method static Builder|Transaction whereAmount($value)
 * @method static Builder|Transaction whereCreatedAt($value)
 * @method static Builder|Transaction whereFee($value)
 * @method static Builder|Transaction whereId($value)
 * @method static Builder|Transaction whereStatus($value)
 * @method static Builder|Transaction whereTransactionId($value)
 * @method static Builder|Transaction whereUpdatedAt($value)
 * @method static Builder|Transaction whereUserId($value)
 * @method static Builder|Transaction whereUuid($value)
 * @mixin Eloquent
 */
class Transaction extends Model
{
    use HasUuidTrait;
    use TransactionFunctionsTrait;
    use TransactionRelationshipsTrait;


    protected $table = 'transactions';

    protected $fillable = [
        'fee',
        'status',
        'amount',
        'model_id',
        'model_type',
        'amount_fee',
        'transaction_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => TransactionStatusEnum::class,
    ];
}
