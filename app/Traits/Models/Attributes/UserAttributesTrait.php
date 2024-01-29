<?php

namespace App\Traits\Models\Attributes;

use App\Enums\User\UserRoleEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

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


    public function getInstitutionTypeAttribute(): string
    {
        return Str::lower($this->institution?->institution?->institution?->name); // TODO:
    }


    public function getInstitutionNameAttribute()
    {
        return $this->institution?->institution?->name;
    }


    public function isOrganizer(): Attribute
    {
        return Attribute::get(fn () => $this->hasRole(UserRoleEnum::Organizer()->value));
    }


    public function isInstructor(): Attribute
    {
        return Attribute::get(fn () => $this->hasRole(UserRoleEnum::Instructor()->value));
    }


    public function isStudent(): Attribute
    {
        return Attribute::get(fn () => $this->hasRole(UserRoleEnum::Student()->value));
    }
}
