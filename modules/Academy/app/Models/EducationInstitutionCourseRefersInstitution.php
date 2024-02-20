<?php

namespace Modules\Academy\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Academy\database\factories\EducationInstitutionCourseRefersInstitutionFactory;

class EducationInstitutionCourseRefersInstitution extends Model
{
    use HasFactory;

    protected static function newFactory(): EducationInstitutionCourseRefersInstitutionFactory
    {
        return EducationInstitutionCourseRefersInstitutionFactory::new();
    }
}
