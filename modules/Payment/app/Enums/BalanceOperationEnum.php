<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Increment()
 * @method static self Decrement()
 */
class BalanceOperationEnum extends Enum
{
    use EnumTrait;
}
