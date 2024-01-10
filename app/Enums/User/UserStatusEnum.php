<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Pending()
 * @method static self Ban()
 */
class UserStatusEnum extends Enum
{
    use EnumTrait;
}
