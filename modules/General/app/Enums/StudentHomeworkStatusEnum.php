<?php

namespace Modules\General\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Expected()
 * @method static self OnCheck()
 * @method static self Accepted()
 * @method static self NotAccepted()
*/
final class StudentHomeworkStatusEnum extends Enum
{
    use EnumTrait;
}
