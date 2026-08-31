<?php

namespace App\Traits\Models\Scope;

use App\Enums\EducationInstitutions\EducationInstitutionsOccupationsEnum;
use Illuminate\Database\Eloquent\Builder;

trait OccupationScopeTrait
{
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereStatus(EducationInstitutionsOccupationsEnum::Active()->value);
    }
}
