<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Traits\Relationships\StudentHomeworkRelationshipsTrait;

/**
 * Modules\General\app\Models\StudentHomework
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string $model_type
 * @property int $model_id
 * @property string $status
 * @property string|null $sub_status
 * @property int $attempts
 * @property Carbon $start_work_datetime
 * @property Carbon $end_work_datetime
 * @property string|null $started_at
 * @property string|null $finished_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Model|Eloquent $model
 * @method static Builder|StudentHomework newModelQuery()
 * @method static Builder|StudentHomework newQuery()
 * @method static Builder|StudentHomework query()
 * @method static Builder|StudentHomework whereAttempts($value)
 * @method static Builder|StudentHomework whereCreatedAt($value)
 * @method static Builder|StudentHomework whereEndWorkDatetime($value)
 * @method static Builder|StudentHomework whereFinishedAt($value)
 * @method static Builder|StudentHomework whereId($value)
 * @method static Builder|StudentHomework whereModelId($value)
 * @method static Builder|StudentHomework whereModelType($value)
 * @method static Builder|StudentHomework whereStartWorkDatetime($value)
 * @method static Builder|StudentHomework whereStartedAt($value)
 * @method static Builder|StudentHomework whereStatus($value)
 * @method static Builder|StudentHomework whereSubStatus($value)
 * @method static Builder|StudentHomework whereUpdatedAt($value)
 * @method static Builder|StudentHomework whereUserId($value)
 * @method static Builder|StudentHomework whereUuid($value)
 * @mixin Eloquent
 */
class StudentHomework extends Model
{
    use HasUuidTrait;
    use StudentHomeworkRelationshipsTrait;


    protected $table = 'student_homeworks';

    protected $fillable = [
        'status',
        'user_id',
        'model_id',
        'model_type',
        'sub_status',
        'end_work_datetime',
        'start_work_datetime',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'end_work_datetime' => 'datetime',
        'start_work_datetime' => 'datetime',
    ];
}
