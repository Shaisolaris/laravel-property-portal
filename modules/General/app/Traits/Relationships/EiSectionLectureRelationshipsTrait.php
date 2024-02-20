<?php

namespace Modules\General\app\Traits\Relationships;

use Modules\General\app\Models\EiSection;

trait EiSectionLectureRelationshipsTrait
{
    public function section()
    {
        return $this->hasOne(EiSection::class, 'id', 'section_id');
    }
}