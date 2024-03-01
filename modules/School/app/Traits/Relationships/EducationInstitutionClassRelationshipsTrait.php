<?php

namespace Modules\School\app\Traits\Relationships;

use App\Models\User;
use App\Models\EntityReview;
use Modules\Schedule\app\Models\Schedule;
use Modules\School\app\Models\EiClassUser;
use Modules\School\app\Models\EiClassSubject;
use Modules\General\app\Models\EiSectionLecture;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\General\app\Models\EducationInstitution;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait EducationInstitutionClassRelationshipsTrait
{
    public function institution()
    {
        return $this->belongsTo(EducationInstitution::class, 'ei_id');
    }


    public function subjects(): HasMany
    {
        return $this->hasMany(EiClassSubject::class, 'class_id'); // TODO: если локальный ключ это id, лара сама его поставит
    }


    public function lectures(): MorphMany
    {
        return $this->morphMany(EiSectionLecture::class, 'model');
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, EiClassUser::class, 'class_id', 'user_id', 'id');
    }


    public function events(): HasMany
    {
        return $this->hasMany(Schedule::class, 'parent_model_id');
    }


    public function reviews(): HasMany
    {
        return $this->hasMany(EntityReview::class, 'model_id');
    }
}
