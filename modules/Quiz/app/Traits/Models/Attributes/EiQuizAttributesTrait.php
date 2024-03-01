<?php

namespace Modules\Quiz\app\Traits\Models\Attributes;

use Modules\General\app\Models\StudentHomework;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait EiQuizAttributesTrait
{
    public function questionsCount(): Attribute
    {
        return Attribute::get(fn () => $this->questions->count());
    }

    public function studentsCount(): Attribute
    {
        return Attribute::get(fn () => StudentHomework::where([
            'model_type' => $this->getMorphClass(),
            'model_id' => $this->id
        ])->count());
    }
}