<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Male()
 * @method static self Female()
 */
class UserGenderEnum extends Enum
{
    use EnumTrait;
}
