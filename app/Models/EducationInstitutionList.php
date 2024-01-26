<?php

namespace App\Models;

use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use Database\Factories\EducationsInstitutionUserFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

class EducationInstitutionList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected static function newFactory(): EducationsInstitutionUserFactory
    {
        return EducationsInstitutionUserFactory::new();
    }

    public function institution(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(EducationInstitution::class, 'education_institution_id');
    }

    public function peoples(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionUsers::class);
    }

    public function courses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            EducationInstitutionCourse::class,
            EducationInstitutionCourseRefersInstitution::class,
            'institution_id',
            'id'
        );
    }


    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereStatus(EducationInstitutionsEnum::Available()->value);
    }
}
