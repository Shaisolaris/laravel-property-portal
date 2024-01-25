<?php

namespace App\Traits\Models\Scope;

use Illuminate\Database\Eloquent\Builder;
use App\Enums\EducationInstitutions\EducationInstitutionsEnum;

trait EducationInstitutionListScopeTrait
{
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereStatus(EducationInstitutionsEnum::Available()->value);
    }
}