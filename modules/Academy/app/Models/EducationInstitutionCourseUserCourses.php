<?php

namespace Modules\Academy\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInstitutionCourseUserCourses extends Model
{
    use HasFactory;

    protected $fillable = [
        'education_institution_id',
        'course_id',
        'user_id',
    ];
}
