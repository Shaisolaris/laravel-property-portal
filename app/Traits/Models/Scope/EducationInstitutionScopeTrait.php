<?php

namespace App\Traits\Models\Scope;

use App\Enums\EducationInstitutions\EiStatusEnum;
use Illuminate\Database\Eloquent\Builder;

trait EducationInstitutionScopeTrait
{
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereStatus(EiStatusEnum::Active()->value);
    }

    public function scopeAvailableInstitutionType(Builder $query): Builder
    {
        return $query->available()->whereRelation('institutionType', 'status', EiStatusEnum::Active()->value);
    }
}
