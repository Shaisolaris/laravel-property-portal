<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\database\factories\EiQuizQuestionAnswerFactory;

/**
 * Modules\Quiz\app\Models\QuizQuestionAnswer
 *
 * @property int $id
 * @property string $uuid
 * @property int $quiz_question_id
 * @property string $answer
 * @property bool $is_correct
 * @property string|null $point
 * @method static Builder|EiQuizQuestionAnswer newModelQuery()
 * @method static Builder|EiQuizQuestionAnswer newQuery()
 * @method static Builder|EiQuizQuestionAnswer query()
 * @method static Builder|EiQuizQuestionAnswer whereAnswer($value)
 * @method static Builder|EiQuizQuestionAnswer whereId($value)
 * @method static Builder|EiQuizQuestionAnswer whereIsCorrect($value)
 * @method static Builder|EiQuizQuestionAnswer wherePoint($value)
 * @method static Builder|EiQuizQuestionAnswer whereQuizQuestionId($value)
 * @method static Builder|EiQuizQuestionAnswer whereUuid($value)
 * @mixin Eloquent
 */
class EiQuizQuestionAnswer extends Model
{
    use HasFactory;
    use HasUuidTrait;


    protected $table = 'ei_quiz_question_answers';

    protected $fillable = [
        'point',
        'answer',
        'is_correct',
        'quiz_question_id',
    ];

    protected $casts = [
        'point' => 'integer',
        'is_correct' => 'boolean'
    ];

    public $timestamps = false;

    protected static function newFactory(): EiQuizQuestionAnswerFactory
    {
        return EiQuizQuestionAnswerFactory::new();
    }
}
