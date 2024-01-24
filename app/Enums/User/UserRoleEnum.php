<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Admin()
 * @method static self Organizer()
 * @method static self Instructor()
 * @method static self Student()
 */
class UserRoleEnum extends Enum
{
    use EnumTrait;
}
