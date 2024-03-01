<?php

namespace Modules\General\app\Traits\Relationships;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\StudentHomeworkScore;
use Modules\Quiz\app\Models\EiQuiz;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\General\app\Models\StudentHomeworkInstructor;

trait StudentHomeworkRelationshipsTrait
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

    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, StudentHomeworkInstructor::class, 'homework_id', 'instructor_id', 'id', 'id');
    }

    public function quizAnswers(): HasMany
    {
        // belongsTo #Alex - если id  впереди, можно реверсивную реляцию сделать - юзни попробуй belongsTo
        return $this->hasMany(StudentHomeworkQuizAnswer::class, 'id', 'homework_id');
    }

    public function quiz(): HasOne
    {
        // morphOne #Alex могут быть погрешности, по типоу что в model_id будет несокльо схожих id. Тебе еще нужне model_type, юзай morphOne
        return $this->hasOne(EiQuiz::class, 'id', 'model_id');
    }

    public function assignment(): MorphOne
    {
        return $this->morphOne(EiAssignment::class, 'model');
    }

    public function grade(): HasOne
    {
        return $this->hasOne(StudentHomeworkScore::class, 'homework_id');
    }
}
