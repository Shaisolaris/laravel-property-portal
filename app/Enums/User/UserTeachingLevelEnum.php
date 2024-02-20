<?php

namespace App\Enums\User;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self beginner()
 * @method static self experienced()
 * @method static self knowledge()
 * @method static self video_learning()
 */
class UserTeachingLevelEnum extends Enum
{
    use EnumTrait;

    protected static function labels(): array
    {
        return [
            'beginner' => "I'm a beginner",
            'knowledge' => "I have some knowledge",
            'experienced' => "I'm experienced",
            'video_learning' => "I have videos ready to upload",
        ];
    }


    public static function getLevels(): array
    {
        return [
            [
                "label" => self::beginner()->label,
                "value" => self::beginner()->value,
            ],
            [
                "label" => self::experienced()->label,
                "value" => self::experienced()->value,
            ],
            [
                "label" => self::knowledge()->label,
                "value" => self::knowledge()->value,
            ],
            [
                "label" => self::video_learning()->label,
                "value" => self::video_learning()->value,
            ],
        ];
    }
}
