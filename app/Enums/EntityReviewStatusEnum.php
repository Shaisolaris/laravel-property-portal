<?php

namespace App\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Published()
 * @method static self Draft()
 * @method static self Disabled()
 */
class EntityReviewStatusEnum extends Enum
{
    use EnumTrait;
}
