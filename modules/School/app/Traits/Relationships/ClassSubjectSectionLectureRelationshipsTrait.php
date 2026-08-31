<?php

namespace Modules\School\app\Traits\Relationships;

use Modules\School\app\Models\EiClass;

trait ClassSubjectSectionLectureRelationshipsTrait
{
    public function eiClass()
    {
        return $this->belongsTo(EiClass::class, 'class_id', 'id');
    }
}
