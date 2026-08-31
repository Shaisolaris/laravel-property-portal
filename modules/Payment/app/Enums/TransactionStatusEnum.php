<?php

namespace Modules\Payment\app\Enums;

use App\Enums\BadgeEnum;
use App\Traits\EnumTrait;
use App\Enums\StripeEnum;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Processing()
 * @method static self Paid()
 */
class TransactionStatusEnum extends Enum
{
    use EnumTrait;


    public static function setStatus(string $status): string
    {
        return match ($status) {
            StripeEnum::ChargeSuccessStatus => self::Paid()->value,
            StripeEnum::ChargePendingStatus, StripeEnum::ChargeFailStatus => self::Processing()->value,
        };
    }


    public static function getBadgeClass(string $status): BadgeEnum
    {
        return match ($status) {
            self::Processing()->label => BadgeEnum::BADGE_WARNING,
            self::Paid()->label => BadgeEnum::BADGE_SUCCESS,
        };
    }
}
