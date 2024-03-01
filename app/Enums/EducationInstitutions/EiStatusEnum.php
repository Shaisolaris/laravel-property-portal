<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Disabled()
 */
class EiStatusEnum extends Enum
{
    use EnumTrait;
}
