<?php

namespace Modules\Quiz\app\Traits\Models\Relationships;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;

trait QuizQuestionRelationshipsTrait
{
    public function answers()
    {
        return $this->hasMany(EiQuizQuestionAnswer::class, 'quiz_question_id', 'id');
    }

    public function quizType()
    {
        return $this->hasOne(EiQuizType::class, 'id', 'quiz_type_id');
    }

    public function quiz()
    {
        return $this->hasOne(EiQuiz::class, 'id', 'quiz_id');
    }
}
