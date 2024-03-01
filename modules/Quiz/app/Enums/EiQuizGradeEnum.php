<?php

namespace Modules\Quiz\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Homework()
 * @method static self Midterm()
 * @method static self FinalExam()
*/
class EiQuizGradeEnum extends Enum
{
    use EnumTrait;
}
