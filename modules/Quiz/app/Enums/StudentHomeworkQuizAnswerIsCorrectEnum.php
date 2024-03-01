<?php

namespace Modules\Quiz\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Yes()
 * @method static self No()
 * @method static self Partially()
*/
class StudentHomeworkQuizAnswerIsCorrectEnum extends Enum
{
    use EnumTrait;
}
