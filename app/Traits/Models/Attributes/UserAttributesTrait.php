<?php

namespace App\Traits\Models\Attributes;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait UserAttributesTrait
{
    public function fullName(): Attribute
    {
        return Attribute::get(fn () => "$this->first_name $this->last_name");
    }
}
