<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Pending()
 * @method static self Done()
 * @method static self Fail()
 */
class WithdrawalRequestStatusEnum extends Enum
{
    use EnumTrait;
}
