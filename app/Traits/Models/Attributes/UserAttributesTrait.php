<?php

namespace App\Traits\Models\Attributes;

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
        return Attribute::get(fn() => $this->roles->first()->name);
    }


    public function getInstitutionTypeAttribute()
    {
        return Str::lower($this->institution->institution->institution->name); // TODO:
    }

    public function getInstitutionNameAttribute()
    {
        return $this->institution->institution->name;
    }
}
