<?php

namespace Modules\Payment\app\Enums;

use App\Traits\EnumTrait;
use App\Enums\StripeEnum;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Pending()
 * @method static self Refund()
 * @method static self Accrue()
 */
class ChargeBalanceStatusEnum extends Enum
{
    use EnumTrait;


    public static function setStatus(string $status): string
    {
        return match ($status) {
            StripeEnum::ChargeSuccessStatus => self::Accrue()->value,
            StripeEnum::ChargePendingStatus, StripeEnum::ChargeFailStatus => self::Pending()->value,
        };
    }
}
