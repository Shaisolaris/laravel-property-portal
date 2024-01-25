<?php

namespace App\Traits\Models\Relationships;

use App\Models\User;
use App\Models\EducationInstitution;
use App\Models\EducationInstitutionUsers;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait EducationInstitutionListRelationshipsTrait
{
    public function institution():BelongsTo
    {
        return $this->belongsTo(EducationInstitution::class, 'education_institution_id');
    }


    public function peoples():BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionUsers::class);
    }
}