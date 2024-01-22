<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * If you need, you can add more institutions.
 * These records, will be transfer to the database
 * @method static self School()
 * @method static self Academy()
 */
class EducationInstitutionsEnum extends Enum
{
    use EnumTrait;
}
