<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self System()
 * @method static self Organization()
 */
class WithdrawalRequestTypeEnum extends Enum
{
    use EnumTrait;
}
