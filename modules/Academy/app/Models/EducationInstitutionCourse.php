<?php

namespace Modules\Academy\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Academy\database\factories\EducationInstitutionCourseFactory;

class EducationInstitutionCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'type',
        'title',
        'language',
        'description',
        'duration_minutes',
    ];

    protected static function newFactory(): EducationInstitutionCourseFactory
    {
        return EducationInstitutionCourseFactory::new();
    }

    public function benefits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EducationInstitutionCourseBenefit::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->belongTo(EducationInstitutionCategories::class,'category_id');
    }
}
