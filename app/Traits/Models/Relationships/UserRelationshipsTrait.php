<?php

namespace App\Traits\Models\Relationships;

use App\Models\Country;
use App\Models\Occupation;
use App\Models\UserDetail;
use App\Models\UserSetting;
use Modules\School\app\Models\EiClass;
use Modules\Payment\app\Models\Payment;
use Modules\Schedule\app\Models\Schedule;
use Modules\School\app\Models\EiClassUser;
use Modules\Payment\app\Models\PaymentCredential;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\General\app\Models\EducationInstitution;
use Modules\General\app\Models\EducationInstitutionUser;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

trait UserRelationshipsTrait
{
    public function settings(): HasOne
    {
        return $this->hasOne(UserSetting::class, 'user_id');
    }

    public function detail(): HasOne
    {
        return $this->hasOne(UserDetail::class, 'user_id');
    }

    public function institution(): HasOne
    {
        return $this->hasOne(EducationInstitutionUser::class, 'user_id')->with('institution');
    }

    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'user_id', 'id');
    }

    public function occupations(): BelongsToMany
    {
        return $this->belongsToMany(Occupation::class);
    }

    public function institutions(): BelongsToMany
    {
        return $this->belongsToMany(EducationInstitution::class, EducationInstitutionUser::class);
    }

    //TODO::
    public function subjects()
    {
        return $this->myClass?->subjects();
    }

    /* For Instructors */
    public function myClasses(): BelongsToMany
    {
        return $this->belongsToMany(EiClass::class, EiClassUser::class, 'user_id', 'class_id', 'id', 'id');
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class, 'user_id', 'id');
    }
    /* */

    /* For Students */
    public function myClass(): HasOneThrough
    {
        return $this->hasOneThrough(EiClass::class, EiClassUser::class, 'user_id', 'id', 'id', 'class_id');
    }

    public function paymentEntity(): HasOne
    {
        return $this->hasOne(Payment::class, 'student_id', 'id');
    }
    /* */

    public function paymentCredentials(): HasMany
    {
        return $this->hasMany(PaymentCredential::class, 'user_id', 'id');
    }
}
