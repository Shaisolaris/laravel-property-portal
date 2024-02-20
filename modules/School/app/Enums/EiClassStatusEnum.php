<?php

namespace Modules\School\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Inactive()
 * @method static self Pending()
 * @method static self Draft()
 */
class EiClassStatusEnum extends Enum
{
    use EnumTrait;
}
