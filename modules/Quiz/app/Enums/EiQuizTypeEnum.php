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
            'Single' => 'single',
            'Multiple' => 'multiple',
            'YesOrNo' => 'yes_or_no',
            'Short' => 'short',
        ];
    }


    protected static function labels(): array
    {
        return [
            'Single' => 'Single',
            'Multiple' => 'Multiple',
            'YesOrNo' => 'Yes Or No',
            'Short' => 'Short',
        ];
    }


    public static function getValue(string $label): int|string
    {
        return match ($label) {
            self::Single()->value => self::Single()->value,
            self::Multiple()->value => self::Multiple()->value,
            self::YesOrNo()->value => self::YesOrNo()->value,
            self::Short()->value => self::Short()->value,
        };
    }
}
