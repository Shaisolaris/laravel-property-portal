<?php

namespace Modules\General\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Manual()
 * @method static self Auto()
*/
final class StudentHomeworkAnswerTypeEnum extends Enum
{
    use EnumTrait;
}