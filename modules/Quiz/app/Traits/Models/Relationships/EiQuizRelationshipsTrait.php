<?php

namespace Modules\Quiz\app\Traits\Models\Relationships;

use App\Models\User;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\General\app\Models\EducationInstitution;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\General\app\Models\StudentHomeworkInstructor;

trait EiQuizRelationshipsTrait
{
    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'id'
        );
    }

    public function questions(): HasMany
    {
        return $this->hasMany(EiQuizQuestion::class, 'quiz_id', 'id');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(EducationInstitution::class, 'ei_id');
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function homework()
    {
        // TODO::
        if(auth()->user()->isStudent()) {
            return $this->morphOne(StudentHomework::class, 'model')->where('user_id', auth()->id());
        } else {
            return $this->morphOne(StudentHomeworkInstructor::class, 'model')->where('instructor_id', auth()->id());
        }
    }

    public function quizAnswers(): HasMany
    {
        return $this->hasMany(StudentHomeworkQuizAnswer::class, 'quiz_id', 'id');
    }
}
