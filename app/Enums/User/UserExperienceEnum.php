<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self beginner()
 * @method static self intermediate()
 * @method static self expert()
 */
class UserExperienceEnum extends Enum
{
    use EnumTrait;
}
