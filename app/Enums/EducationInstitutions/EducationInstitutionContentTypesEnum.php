<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self VideoCourse()
 * @method static self Session()
 * @method static self Lesson()
 */
class EducationInstitutionContentTypesEnum extends Enum
{
    use EnumTrait;
}
