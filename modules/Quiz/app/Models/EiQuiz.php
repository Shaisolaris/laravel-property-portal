<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Models\User;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\database\factories\EiQuizFactory;
use Modules\General\app\Models\EducationInstitution;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\app\Traits\Models\Functions\EiQuizFunctionsTrait;
use Modules\Quiz\app\Traits\Models\Attributes\EiQuizAttributesTrait;
use Modules\Quiz\app\Traits\Models\Relationships\EiQuizRelationshipsTrait;

/**
 * Modules\Quiz\app\Models\EiQuiz
 *
 * @property int $id
 * @property string $uuid
 * @property int $lecture_id
 * @property string $model_type
 * @property int $model_id
 * @property string $name
 * @property string $language
 * @property string $grade
 * @property int $total_score
 * @property string $description
 * @property int $pass_mark
 * @property int $duration_minutes
 * @property int $attempts
 * @property string $points_no_answer
 * @property string $points_wrong_answer
 * @property Carbon $start_work_datetime
 * @property Carbon $end_work_datetime
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read StudentHomework|null $homework
 * @property-read EducationInstitution|null $institution
 * @property-read User|null $instructor
 * @property-read Model|Eloquent $model
 * @property-read Collection<int, EiQuizQuestion> $questions
 * @property-read int|null $questions_count
 * @property-read mixed $students_count
 * @method static EiQuizFactory factory($count = null, $state = [])
 * @method static Builder|EiQuiz newModelQuery()
 * @method static Builder|EiQuiz newQuery()
 * @method static Builder|EiQuiz query()
 * @method static Builder|EiQuiz whereAttempts($value)
 * @method static Builder|EiQuiz whereCreatedAt($value)
 * @method static Builder|EiQuiz whereDescription($value)
 * @method static Builder|EiQuiz whereDurationMinutes($value)
 * @method static Builder|EiQuiz whereEndWorkDatetime($value)
 * @method static Builder|EiQuiz whereGrade($value)
 * @method static Builder|EiQuiz whereGradePassingScore($value)
 * @method static Builder|EiQuiz whereId($value)
 * @method static Builder|EiQuiz whereLanguage($value)
 * @method static Builder|EiQuiz whereLectureId($value)
 * @method static Builder|EiQuiz whereModelId($value)
 * @method static Builder|EiQuiz whereModelType($value)
 * @method static Builder|EiQuiz whereName($value)
 * @method static Builder|EiQuiz wherePassMark($value)
 * @method static Builder|EiQuiz wherePointsNoAnswer($value)
 * @method static Builder|EiQuiz wherePointsWrongAnswer($value)
 * @method static Builder|EiQuiz whereStartWorkDatetime($value)
 * @method static Builder|EiQuiz whereUpdatedAt($value)
 * @method static Builder|EiQuiz whereUuid($value)
 * @mixin Eloquent
 */
class EiQuiz extends Model
{
    use HasFactory;
    use HasUuidTrait;
    use EiQuizFunctionsTrait;
    use EiQuizAttributesTrait;
    use EiQuizRelationshipsTrait;


    protected $table = 'ei_quizzes';

    protected $fillable = [
        'name',
        'grade',
        'model_id',
        'language',
        'pass_mark',
        'model_type',
        'lecture_id',
        'started_at',
        'finished_at',
        'description',
        'attempts',
        'duration_minutes',
        'points_no_answer',
        'end_work_datetime',
        'start_work_datetime',
        'points_wrong_answer',
        'total_score',
    ];

    protected $casts = [
        'pass_mark' => 'integer',
        'total_score' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
        'duration_minutes' => 'integer',
        'points_no_answer' => 'decimal:2',
        'points_wrong_answer' => 'decimal:2',
        'end_work_datetime' => 'datetime:Y-m-d H:i:00',
        'start_work_datetime' => 'datetime:Y-m-d H:i:00',
    ];

    protected static function newFactory(): EiQuizFactory
    {
        return EiQuizFactory::new();
    }
}
