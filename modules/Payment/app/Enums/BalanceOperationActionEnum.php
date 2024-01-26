<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Charge()
 * @method static self Refund()
 */
class BalanceOperationActionEnum extends Enum
{
    use EnumTrait;
}
