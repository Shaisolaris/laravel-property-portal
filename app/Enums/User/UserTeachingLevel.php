<?php

namespace App\Enums\User;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self beginner()
 * @method static self experienced()
 * @method static self knowledge()
 * @method static self video_learning()
 */
class UserTeachingLevel extends Enum
{
    protected static function labels(): array
    {
        return [
            'beginner' => "I'm a beginner",
            'knowledge' => "I have some knowledge",
            'experienced' => "I'm experienced",
            'video_learning' => "I have videos ready to upload",
        ];
    }

    public static function implode(): string
    {
        return collect(self::toValues())->implode(',');
    }
}
