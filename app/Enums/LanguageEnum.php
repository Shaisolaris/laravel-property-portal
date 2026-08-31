<?php

namespace App\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self English()
 * @method static self Dari() // язык афганских таджиков
 * @method static self Pashto() // восточно-иранский язык
 * @method static self Farsi()
 */
class LanguageEnum extends Enum
{
    use EnumTrait;

    public static function getLanguages(): array
    {
        return [
            [
                "label" => self::English()->label,
                "value" => self::English()->value,
                "code" => "en"
            ],
            [
                "label" => self::Dari()->label,
                "value" => self::Dari()->value,
                "code" => "dr"
            ],
            [
                "label" => self::Pashto()->label,
                "value" => self::Pashto()->value,
                "code" => "ps"
            ],
            [
                "label" => self::Farsi()->label,
                "value" => self::Farsi()->value,
                "code" => "fa"
            ]
        ];
    }
}
