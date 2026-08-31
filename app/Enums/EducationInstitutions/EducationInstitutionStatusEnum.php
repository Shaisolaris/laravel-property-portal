<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Disabled()
 */
class EducationInstitutionStatusEnum extends Enum
{
    use EnumTrait;
}
