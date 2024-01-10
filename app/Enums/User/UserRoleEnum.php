<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Admin()
 * @method static self StudentSchool()
 * @method static self StudentAcademy()
 * @method static self InstructorSchool()
 * @method static self InstructorAcademy()
 */
class UserRoleEnum extends Enum
{
    use EnumTrait;
}
