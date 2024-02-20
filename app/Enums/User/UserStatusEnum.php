<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Pending()
 * @method static self Ban()
 * @method static self PreActive()
 * @method static self Rejected()
 * @method static self Review()
 */
class UserStatusEnum extends Enum
{
    use EnumTrait;
}
