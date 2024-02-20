<?php

namespace App\Traits\Models\Attributes;

use Illuminate\Support\Str;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserGenderEnum;
use Modules\Schedule\app\Models\Schedule;
use Modules\Payment\app\Models\Transaction;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait UserAttributesTrait
{
    public function fullName(): Attribute
    {
        return Attribute::get(fn () => "$this->first_name $this->last_name");
    }

    public function roleName(): Attribute
    {
        return Attribute::get(fn () => $this->roles->first()->name);
    }

    public function gender(): Attribute
    {
        return Attribute::get(fn ($value) => is_null($value) ? null : UserGenderEnum::from($value));
    }

    public function getInstitutionTypeAttribute(): string
    {
        return Str::lower($this->institution?->institution?->institutionType?->name); // TODO:
    }

    public function getInstitutionNameAttribute()
    {
        return $this->institution?->institution?->name;
    }

    public function getInstitutionIdAttribute()
    {
        return $this->institution?->institution?->id;
    }

    public function balanceOrganization(): Attribute
    {
        return Attribute::get(fn () => $this->isOrganizer() ? Transaction::getBalance($this) : Schedule::getBalance($this));
    }
}
