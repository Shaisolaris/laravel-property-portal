<?php

namespace App\Enums\EducationInstitutions;

use App\Traits\EnumTrait;
use Illuminate\Support\Str;
use Spatie\Enum\Laravel\Enum;

/**
 * If you need, you can add more institutions.
 * These records, will be transfer to the database
 * @method static self School()
 * @method static self Academy()
 *
 * @method static self Available()
 * @method static self Disabled()
 */
class EducationInstitutionsEnum extends Enum
{
    use EnumTrait;

    protected static function values(): array
    {
        return [
            'School' => 'school',
            'Academy' => 'academy',
            'Available' => 1,
            'Disabled' => 0,
        ];
    }

    public static function institutions(): \Illuminate\Support\Collection
    {
        return collect([
            self::School(),
            self::Academy(),
        ]);
    }
}
