<?php

namespace Modules\Schedule\app\Models;

use Eloquent;
use App\Models\User;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Schedule\Database\factories\ScheduleFactory;
use Modules\School\app\Traits\Functions\ScheduleFunctionsTrait;
use Modules\Schedule\app\Traits\Relationships\ScheduleRelationshipsTrait;

/**
 * Modules\Schedule\app\Models\Schedule
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string|null $parent_model_type
 * @property int|null $parent_model_id
 * @property string $model_type
 * @property int $model_id
 * @property string $lesson_link
 * @property Carbon $event_date
 * @property string $event_start_time
 * @property string $event_end_time
 * @property Enum $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User|null $creator
 * @property-read Model|Eloquent $model
 * @property-read Model|Eloquent $parentModel
 * @method static Builder|Schedule newModelQuery()
 * @method static Builder|Schedule newQuery()
 * @method static Builder|Schedule query()
 * @method static Builder|Schedule whereCreatedAt($value)
 * @method static Builder|Schedule whereEventDate($value)
 * @method static Builder|Schedule whereEventEndTime($value)
 * @method static Builder|Schedule whereEventStartTime($value)
 * @method static Builder|Schedule whereId($value)
 * @method static Builder|Schedule whereLessonLink($value)
 * @method static Builder|Schedule whereModelId($value)
 * @method static Builder|Schedule whereModelType($value)
 * @method static Builder|Schedule whereParentModelId($value)
 * @method static Builder|Schedule whereParentModelType($value)
 * @method static Builder|Schedule whereStatus($value)
 * @method static Builder|Schedule whereUpdatedAt($value)
 * @method static Builder|Schedule whereUserId($value)
 * @method static Builder|Schedule whereUuid($value)
 * @mixin Eloquent
 */
class Schedule extends Model
{
    use HasFactory;
    use HasUuidTrait;
    use ScheduleFunctionsTrait;
    use ScheduleRelationshipsTrait;


    protected $table = 'schedule';

    protected $fillable = [
        'status',
        'user_id',
        'model_id',
        'event_date',
        'model_type',
        'lesson_link',
        'event_end_time',
        'parent_model_id',
        'creator_user_id',
        'event_start_time',
        'parent_model_type',
    ];

    protected $casts = [
        'event_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => ScheduleStatusEnum::class
    ];


    protected static function newFactory(): ScheduleFactory
    {
        return ScheduleFactory::new();
    }
}
