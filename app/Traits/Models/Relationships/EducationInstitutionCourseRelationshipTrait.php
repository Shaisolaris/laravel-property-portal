<?php

namespace App\Traits\Models\Relationships;

use Modules\General\app\Models\EiAssignments;
use Modules\General\app\Models\EiSection;
use Modules\General\app\Models\EducationInstitutionCategory;
use Modules\Academy\app\Models\EducationInstitutionCourseBenefit;

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

    public function sections(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(EiSection::class, 'model');
    }

    public function assignments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(EiAssignments::class, 'model');
    }
}
