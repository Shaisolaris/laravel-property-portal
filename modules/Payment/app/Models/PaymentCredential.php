<?php

namespace Modules\Payment\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Payment\app\Models\PaymentCredential
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string $card_number
 * @property string $card_holder_name
 * @property string $expiry_month
 * @property string $expiry_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|PaymentCredential newModelQuery()
 * @method static Builder|PaymentCredential newQuery()
 * @method static Builder|PaymentCredential query()
 * @method static Builder|PaymentCredential whereCardHolderName($value)
 * @method static Builder|PaymentCredential whereCardNumber($value)
 * @method static Builder|PaymentCredential whereCreatedAt($value)
 * @method static Builder|PaymentCredential whereExpiryMonth($value)
 * @method static Builder|PaymentCredential whereExpiryYear($value)
 * @method static Builder|PaymentCredential whereId($value)
 * @method static Builder|PaymentCredential whereUpdatedAt($value)
 * @method static Builder|PaymentCredential whereUserId($value)
 * @method static Builder|PaymentCredential whereUuid($value)
 * @mixin Eloquent
 */
class PaymentCredential extends Model
{
    use HasUuidTrait;


    protected $table = 'payment_credentials';

    protected $fillable = [
        'user_id',
        'card_number',
        'expiry_year',
        'expiry_month',
        'card_holder_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
