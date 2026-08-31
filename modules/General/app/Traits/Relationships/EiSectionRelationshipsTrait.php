<?php

namespace Modules\General\app\Traits\Relationships;

use Modules\General\app\Models\EiSectionLecture;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait EiSectionRelationshipsTrait
{
    public function lectures(): HasMany
    {
        return $this->hasMany(EiSectionLecture::class, 'section_id');
    }

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
