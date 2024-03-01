<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\database\factories\EiQuizQuestionFactory;
use Modules\Quiz\app\Traits\Models\Relationships\EiQuizQuestionRelationshipsTrait;

/**
 * Modules\Quiz\app\Models\EiQuizQuestion
 *
 * @property int $id
 * @property string $uuid
 * @property int $quiz_type_id
 * @property int $quiz_id
 * @property string $question
 * @property int $point
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, EiQuizQuestionAnswer> $answers
 * @property-read int|null $answers_count
 * @property-read EiQuiz|null $quiz
 * @property-read EiQuizType|null $quizType
 * @method static Builder|EiQuizQuestion newModelQuery()
 * @method static Builder|EiQuizQuestion newQuery()
 * @method static Builder|EiQuizQuestion query()
 * @method static Builder|EiQuizQuestion whereCreatedAt($value)
 * @method static Builder|EiQuizQuestion whereId($value)
 * @method static Builder|EiQuizQuestion wherePoint($value)
 * @method static Builder|EiQuizQuestion whereQuestion($value)
 * @method static Builder|EiQuizQuestion whereQuizId($value)
 * @method static Builder|EiQuizQuestion whereQuizTypeId($value)
 * @method static Builder|EiQuizQuestion whereUpdatedAt($value)
 * @method static Builder|EiQuizQuestion whereUuid($value)
 * @mixin Eloquent
 */
class EiQuizQuestion extends Model
{
    use HasFactory;
    use HasUuidTrait;
    use EiQuizQuestionRelationshipsTrait;


    protected $table = 'ei_quiz_questions';

    protected $fillable = [
        'point',
        'quiz_id',
        'question',
        'quiz_type_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'point' => 'integer'
    ];

    protected $with = ['answers'];


    protected static function newFactory(): EiQuizQuestionFactory
    {
        return EiQuizQuestionFactory::new();
    }
}
