<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self SuperAdmin()
 * @method static self Admin()
 * @method static self Organizer()
 * @method static self Instructor()
 * @method static self Student()
 */
class UserRoleEnum extends Enum
{
    use EnumTrait;


    public static function adminRoles(): array
    {
        return [self::Admin()->value, self::SuperAdmin()->value];
    }


    public static function notAdminRoleValues(): array
    {
        return [self::Organizer()->value, self::Instructor()->value, self::Student()->value,];
    }
}
