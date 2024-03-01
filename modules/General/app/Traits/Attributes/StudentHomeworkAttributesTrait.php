<?php

namespace Modules\General\app\Traits\Attributes;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait StudentHomeworkAttributesTrait
{
    public function myGrade(): Attribute
    {
        return Attribute::get(fn () => $this->quiz->quizAnswers->sum('point'));
    }
}