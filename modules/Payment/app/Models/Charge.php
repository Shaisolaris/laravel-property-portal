<?php

namespace Modules\Payment\app\Models;

use Eloquent;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\Payment\app\Enums\ChargeStatusEnum;
use Modules\Payment\app\Traits\Models\Relationships\ChargeRelationshipsTrait;

/**
 * Modules\Payment\app\Models\Charge
 *
 * @property int $id
 * @property string $uuid
 * @property string $charge_id
 * @property string $payment_intent_id
 * @property string $checkout_session_id
 * @property string $payment_method_id
 * @property Enum|null $status
 * @property string $balance_status
 * @property string $balance_transaction
 * @property string $amount
 * @property string $commission
 * @property string $commission_percent
 * @property mixed $payment_method_details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Charge newModelQuery()
 * @method static Builder|Charge newQuery()
 * @method static Builder|Charge query()
 * @method static Builder|Charge whereAmount($value)
 * @method static Builder|Charge whereBalanceStatus($value)
 * @method static Builder|Charge whereBalanceTransaction($value)
 * @method static Builder|Charge whereChargeId($value)
 * @method static Builder|Charge whereCheckoutSessionId($value)
 * @method static Builder|Charge whereCommission($value)
 * @method static Builder|Charge whereCommissionPercent($value)
 * @method static Builder|Charge whereCreatedAt($value)
 * @method static Builder|Charge whereId($value)
 * @method static Builder|Charge wherePaymentIntentId($value)
 * @method static Builder|Charge wherePaymentMethodDetails($value)
 * @method static Builder|Charge wherePaymentMethodId($value)
 * @method static Builder|Charge whereStatus($value)
 * @method static Builder|Charge whereUpdatedAt($value)
 * @method static Builder|Charge whereUuid($value)
 * @mixin Eloquent
 */
class Charge extends Model
{
    use HasUuidTrait;
    use ChargeRelationshipsTrait;


    protected $table = 'charges';

    protected $fillable = [
        'amount',
        'status',
        'charge_id',
        'commission',
        'balance_status',
        'payment_intent_id',
        'payment_method_id',
        'commission_percent',
        'checkout_session_id',
        'balance_transaction',
        'payment_method_details',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'payment_method_details' => 'array',
        'status' => ChargeStatusEnum::class
    ];
}
