<?php

namespace App\Traits\Models\Relationships;

use App\Models\User;
use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\EiSection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\General\app\Models\EducationInstitutionCategory;
use Modules\Academy\app\Models\EducationInstitutionCourseBenefit;
use Modules\Academy\app\Models\EducationInstitutionCourseUserCourses;

trait EducationInstitutionCourseRelationshipTrait
{
    public function benefits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EducationInstitutionCourseBenefit::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(EducationInstitutionCategory::class, 'category_id');
    }

    public function sections(): MorphMany
    {
        return $this->morphMany(EiSection::class, 'model');
    }

    public function assignments(): MorphMany
    {
        return $this->morphMany(EiAssignment::class, 'model');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionCourseUserCourses::class, 'course_id', 'user_id', 'id');
    }
}
