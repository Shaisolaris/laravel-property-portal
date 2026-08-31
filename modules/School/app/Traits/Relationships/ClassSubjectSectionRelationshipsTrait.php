<?php

namespace Modules\School\app\Traits\Relationships;

use Modules\General\app\Models\EiSectionLecture;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait ClassSubjectSectionRelationshipsTrait
{
    public function lectures(): MorphMany
    {
        return $this->morphMany(EiSectionLecture::class, 'model');
    }
}
