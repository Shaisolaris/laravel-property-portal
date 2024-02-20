<?php

namespace Modules\School\app\Traits\Relationships;

use App\Models\User;
use Modules\General\app\Models\EiAssignments;
use Modules\School\app\Models\EiClass;
use Modules\Schedule\app\Models\Schedule;
use Modules\General\app\Models\EiSection;
use Modules\School\app\Models\EiClassSubjectUser;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait ClassSubjectRelationshipsTrait
{
    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, EiClassSubjectUser::class, 'subject_id', 'user_id', 'id', 'id');
    }


    public function eiClass(): BelongsTo
    {
        return $this->belongsTo(EiClass::class, 'class_id', 'id');
    }


    public function sections(): MorphMany
    {
        return $this->morphMany(EiSection::class, 'model');
    }


    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class, 'model_id', 'id');
    }

    public function assignments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(EiAssignments::class, 'model');
    }
}
