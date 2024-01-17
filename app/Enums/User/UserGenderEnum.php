<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self levels()
 */
class UserGenderEnum extends Enum
{
    use EnumTrait;


    public static function getGenders(): array
    {
        return [
            [
                "name" => self::Male()->label,
                "value" => self::Male()->value,
            ],
            [
                "name" => self::Female()->label,
                "value" => self::Female()->value,
            ]
        ];
    }
}
