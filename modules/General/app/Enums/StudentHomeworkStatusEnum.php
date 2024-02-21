<?php

namespace Modules\General\app\Enums;

use App\Traits\EnumTrait;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Pending()
 * @method static self InProgress()
 * @method static self OnReview()
 * @method static self Accepted()
 * @method static self Rejected()
 * @method static self BeingAssessed()
 * @method static self Expired()
 * @method static self Unfinished()
*/
final class StudentHomeworkStatusEnum extends Enum
{
    use EnumTrait;
}