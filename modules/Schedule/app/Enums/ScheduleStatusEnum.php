<?php

namespace Modules\Schedule\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Pending()
 * @method static self Active()
 * @method static self Passed()
 * @method static self Canceled()
 */
class ScheduleStatusEnum extends Enum
{
    use EnumTrait;


    public static function getStatuses(): array
    {
        $data = self::getLabelsValues();

        unset($data[1]);
        unset($data[2]);

        return array_values($data);
    }
}
