<?php

namespace Modules\Payment\app\Enums\Charge;

use App\Enums\BadgeEnum;
use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Success()
 * @method static self Refund()
 * @method static self Fail()
 */
class ChargeStatusEnum extends Enum
{
    use EnumTrait;


    public static function getBadgeClass(string $status): BadgeEnum
    {
        return match ($status) {
            self::Success()->value => BadgeEnum::BADGE_SUCCESS,
            self::Refund()->value, self::Fail()->value => BadgeEnum::BADGE_DANGER,
            default => BadgeEnum::BADGE_WARNING
        };
    }
}
