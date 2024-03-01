<?php

namespace Modules\General\app\Traits\Relationships;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\General\app\Models\EiSection;
use Modules\General\app\Models\EiAssignment;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait EiSectionLectureRelationshipsTrait
{
    public function section()
    {
        return $this->hasOne(EiSection::class, 'id', 'section_id');
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(EiAssignment::class, 'lecture_id', 'id');
    }

    public function quizzes(): HasMany
    {
        return $this->hasMany(EiQuiz::class, 'lecture_id', 'id');
    }
}