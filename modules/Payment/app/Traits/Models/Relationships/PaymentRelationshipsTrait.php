<?php

namespace Modules\Payment\app\Traits\Models\Relationships;

use App\Models\User;
use Modules\Payment\app\Models\Charge;
use Modules\Payment\app\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\General\app\Models\EducationInstitution;

trait PaymentRelationshipsTrait
{
    public function student()
    {
        return $this->hasOne(User::class, 'id', 'student_id');
    }


    public function instructor()
    {
        return $this->hasOne(User::class, 'id', 'instructor_id');
    }


    public function organizer()
    {
        return $this->hasOne(User::class, 'id', 'organizer_id');
    }


    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id', 'transaction_id');
    }


    public function charge()
    {
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }


    public function institution()
    {
        return $this->hasOne(EducationInstitution::class, 'id', 'ei_id');
    }


    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'id'
        );
    }
}
