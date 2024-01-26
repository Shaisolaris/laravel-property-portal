<?php

namespace Modules\Payment\app\Enums\Charge;

use App\Traits\EnumTrait;
use Illuminate\Support\Str;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Pending()
 * @method static self Refund()
 * @method static self Accrue()
 */
class ChargeBalanceStatusEnum extends Enum
{
    use EnumTrait;
}
