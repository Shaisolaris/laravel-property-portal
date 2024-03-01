<?php

namespace App\Traits\Models\Relationships;

use App\Models\Role;
use App\Models\User;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Modules\School\app\Models\EiClass;
use Modules\Payment\app\Models\Payment;
use Illuminate\Database\Eloquent\Builder;
use Modules\Payment\app\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\General\app\Models\EducationInstitutionType;
use Modules\General\app\Models\EducationInstitutionUser;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

trait EiRelationshipsTrait
{
    public function institutionType(): BelongsTo
    {
        return $this->belongsTo(EducationInstitutionType::class, 'education_institution_type_id');
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

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionUser::class);
    }

    public function activeUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, EducationInstitutionUser::class)->where('status', UserStatusEnum::Active()->value);
    }

    public function classes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EiClass::class, 'ei_id');
    }

    public function organizers(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class, EducationInstitutionUser::class)
            ->where(function ($query) {
                // TODO:: Try this ->whereRelation('roles', 'name', UserRoleEnum::Organizer()->value)
                // TODO: Try ->role(UserRoleEnum::Organizer()->value) without where, ->belongsToMany(....)->role(...)
                // Check the code inside whereRelation()
                /** @var Builder|User $query */
                $query->whereHas('roles', function ($query) {
                    /** @var Builder|Role $query */
                    $query->where('name', UserRoleEnum::Organizer()->value);
                });
            })
        ;
    }

    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class, Payment::class, 'ei_id', 'transaction_id');
    }
}
