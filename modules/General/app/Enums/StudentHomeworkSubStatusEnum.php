<?php

namespace Modules\General\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Replay()
 * @method static self Expiration()
 * @method static self Started()
 * @method static self Finished()
 * @method static self Unfinished()
*/
final class StudentHomeworkSubStatusEnum extends Enum
{
    use EnumTrait;
}