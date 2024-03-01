<?php

namespace Modules\Quiz\app\Traits\Models\Relationships;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\General\app\Models\StudentHomework;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait StudentHomeworkQuizAnswerRelationshipsTrait
{
    public function homework(): HasOne
    {
        return $this->hasOne(StudentHomework::class, 'id', 'homework_id');
    }

    public function quiz(): HasOne
    {
        return $this->hasOne(EiQuiz::class, 'id', 'quiz_id');
    }

    public function user(): BelongsTo
    {
        return $this->homework->student();
    }
}