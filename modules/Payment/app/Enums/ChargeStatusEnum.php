<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use App\Enums\StripeEnum;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Success()
 * @method static self Pending()
 * @method static self Refund()
 * @method static self Fail()
 */
class ChargeStatusEnum extends Enum
{
    use EnumTrait;


    public static function setStatus(string $status): string
    {
        return match ($status) {
            StripeEnum::ChargeSuccessStatus => self::Success()->value,
            StripeEnum::ChargePendingStatus => self::Pending()->value,
            StripeEnum::ChargeFailStatus => self::Fail()->value,
        };
    }
}
