<?php

namespace Modules\Academy\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInstitutionCourseBenefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'education_institution_course_id',
    ];
}
