<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Traits\Models\Relationships\StudentHomeworkQuizAnswerRelationshipsTrait;

/**
 * Modules\Quiz\app\Models\StudentHomeworkQuizAnswer
 *
 * @property int $id
 * @property string $uuid
 * @property int $homework_id
 * @property int|null $quiz_id
 * @property int $question_id
 * @property int $quiz_type_id
 * @property string $point
 * @property string|null $is_correct
 * @property array|null $correct_answers
 * @property array|null $current_answers
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read StudentHomework|null $homework
 * @property-read EiQuiz|null $quiz
 * @method static Builder|StudentHomeworkQuizAnswer newModelQuery()
 * @method static Builder|StudentHomeworkQuizAnswer newQuery()
 * @method static Builder|StudentHomeworkQuizAnswer query()
 * @method static Builder|StudentHomeworkQuizAnswer whereCorrectAnswers($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereCreatedAt($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereCurrentAnswers($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereHomeworkId($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereId($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereIsCorrect($value)
 * @method static Builder|StudentHomeworkQuizAnswer wherePoint($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereQuestionId($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereQuizId($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereQuizTypeId($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereUpdatedAt($value)
 * @method static Builder|StudentHomeworkQuizAnswer whereUuid($value)
 * @mixin Eloquent
 */
class StudentHomeworkQuizAnswer extends Model
{
    use HasUuidTrait;
    use StudentHomeworkQuizAnswerRelationshipsTrait;


    protected $table = 'student_homework_quiz_answers';

    protected $fillable = [
        'point',
        'answer',
        'quiz_id',
        'is_correct',
        'homework_id',
        'question_id',
        'quiz_type_id',
        'correct_answers',
        'current_answers',
    ];

    protected $casts = [
        'correct_answers' => 'array',
        'current_answers' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
