<?php

namespace Modules\Quiz\app\Traits\Models\Relationships;

use App\Models\User;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\database\seeders\QuizTypeSeeder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\General\app\Models\EducationInstitution;

trait QuizRelationshipsTrait
{
    public function questions()
    {
        return $this->hasMany(EiQuizQuestion::class, 'quiz_id', 'id');
    }

    public function institution()
    {
        return $this->belongsTo(EducationInstitution::class, 'ei_id');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
