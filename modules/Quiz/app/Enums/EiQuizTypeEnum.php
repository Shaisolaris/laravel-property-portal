<?php

namespace Modules\Quiz\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Single()
 * @method static self Multiple()
 * @method static self YesOrNo()
 * @method static self Short()
 */
final class EiQuizTypeEnum extends Enum
{
    use EnumTrait;

    protected static function values(): array
    {
        return [
            'Single' => 1,
            'Multiple' => 2,
            'YesOrNo' => 3,
            'Short' => 4,
//            'Single' => 'single',
//            'Multiple' => 'multiple',
//            'YesOrNo' => 'yes_or_no',
//            'Short' => 'short',
        ];
    }


    protected static function labels(): array
    {
        return [
            'Single' => 'single',
            'Multiple' => 'multiple',
            'YesOrNo' => 'yes_or_no',
            'Short' => 'short',
        ];
    }


    public static function getValue(string $label): int|string
    {
        return match ($label) {
            self::Single()->label => self::Single()->value,
            self::Multiple()->label => self::Multiple()->value,
            self::YesOrNo()->label => self::YesOrNo()->value,
            self::Short()->label => self::Short()->value,
        };
    }
}
