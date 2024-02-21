<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Models\User;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Modules\General\app\Models\EducationInstitution;
use Modules\Quiz\app\Traits\Models\Relationships\QuizRelationshipsTrait;

/**
 * Modules\Quiz\app\Models\EiQuiz
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property int $ei_id
 * @property int $lecture_id
 * @property string $name
 * @property string $language
 * @property string $grade
 * @property string $grade_passing_score
 * @property string $description
 * @property int $pass_mark
 * @property int $duration_minutes
 * @property int $number_attempts
 * @property string $points_no_answer
 * @property string $points_wrong_answer
 * @property Carbon $start_work_datetime
 * @property Carbon $end_work_datetime
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read EducationInstitution $institution
 * @property-read User $instructor
 * @property-read Collection<int, EiQuizQuestion> $questions
 * @property-read int|null $questions_count
 * @method static Builder|EiQuiz newModelQuery()
 * @method static Builder|EiQuiz newQuery()
 * @method static Builder|EiQuiz query()
 * @method static Builder|EiQuiz whereCreatedAt($value)
 * @method static Builder|EiQuiz whereDescription($value)
 * @method static Builder|EiQuiz whereDurationMinutes($value)
 * @method static Builder|EiQuiz whereEiId($value)
 * @method static Builder|EiQuiz whereEndWorkDatetime($value)
 * @method static Builder|EiQuiz whereGrade($value)
 * @method static Builder|EiQuiz whereGradePassingScore($value)
 * @method static Builder|EiQuiz whereId($value)
 * @method static Builder|EiQuiz whereLanguage($value)
 * @method static Builder|EiQuiz whereLectureId($value)
 * @method static Builder|EiQuiz whereName($value)
 * @method static Builder|EiQuiz whereNumberAttempts($value)
 * @method static Builder|EiQuiz wherePassMark($value)
 * @method static Builder|EiQuiz wherePointsNoAnswer($value)
 * @method static Builder|EiQuiz wherePointsWrongAnswer($value)
 * @method static Builder|EiQuiz whereStartWorkDatetime($value)
 * @method static Builder|EiQuiz whereUpdatedAt($value)
 * @method static Builder|EiQuiz whereUserId($value)
 * @method static Builder|EiQuiz whereUuid($value)
 * @mixin Eloquent
 */
class EiQuiz extends Model
{
    use HasUuidTrait;
    use QuizRelationshipsTrait;


    protected $table = 'ei_quizzes';

    protected $fillable = [
        'name',
        'grade',
        'ei_id',
        'user_id',
        'language',
        'pass_mark',
        'lecture_id',
        'started_at',
        'finished_at',
        'description',
        'number_attempts',
        'duration_minutes',
        'points_no_answer',
        'end_work_datetime',
        'start_work_datetime',
        'points_wrong_answer',
        'grade_passing_score',
    ];

    protected $casts = [
        'time' => 'integer',
        'pass_mark' => 'integer',
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
}
