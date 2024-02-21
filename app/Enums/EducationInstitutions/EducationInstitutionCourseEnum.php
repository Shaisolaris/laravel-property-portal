<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Disabled()
 * @method static self Draft()
 * @method static self Pending()
 */

class EducationInstitutionCourseEnum extends Enum
{
    use EnumTrait;
}
