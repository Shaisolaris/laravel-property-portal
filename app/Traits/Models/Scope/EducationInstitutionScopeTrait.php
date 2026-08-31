<?php

namespace App\Traits\Models\Scope;

use App\Enums\EducationInstitutions\EducationInstitutionStatusEnum;
use Illuminate\Database\Eloquent\Builder;

trait EducationInstitutionScopeTrait
{
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereStatus(EducationInstitutionStatusEnum::Active()->value);
    }
}
