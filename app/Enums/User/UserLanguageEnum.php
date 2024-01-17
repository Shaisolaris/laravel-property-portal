<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self English()
 * @method static self Spanish()
 */
class UserLanguageEnum extends Enum
{
    use EnumTrait;


    public static function getLanguages(): array
    {
        return [
            [
                "name" => self::English()->label,
                "value" => self::English()->value,
            ],
            [
                "name" => self::Spanish()->label,
                "value" => self::Spanish()->value,
            ]
        ];
    }
}
