<?php

namespace App\Traits\Models\Relationships;

use App\Models\User;
use App\Models\EducationInstitution;
use App\Models\EducationInstitutionUsers;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

trait EducationInstitutionListRelationshipsTrait
{
    public function institution():BelongsTo
    {
        return $this->belongsTo(EducationInstitution::class, 'education_institution_id');
    }

    public function courses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            EducationInstitutionCourse::class,
            EducationInstitutionCourseRefersInstitution::class,
            'institution_id',
            'id'
        );
    }

    public function peoples():BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionUsers::class);
    }
}
