<?php

namespace Modules\General\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Correct()
 * @method static self Incorrect()
 * @method static self PartialAnswer()
*/
final class StudentHomeworkAnswerStatusEnum extends Enum
{
    use EnumTrait;
}