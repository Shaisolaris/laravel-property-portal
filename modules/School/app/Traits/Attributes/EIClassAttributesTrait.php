<?php

namespace Modules\School\app\Traits\Attributes;

use Illuminate\Support\Number;
use App\Enums\User\UserRoleEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait EIClassAttributesTrait
{
    public function subjectsCount(): Attribute
    {
        return Attribute::get(fn () => $this->subjects->count());
    }


    public function studentsCount(): Attribute
    {
        return Attribute::get(fn () => $this->users->where('roleName', UserRoleEnum::Student()->value)->count());
    }


    public function reviewsCount(): Attribute
    {
        return Attribute::get(fn () => $this->reviews->count());
    }


    public function instructorsCount(): Attribute
    {
        return Attribute::get(fn () => $this->users->where('roleName', UserRoleEnum::Instructor()->value)->count());
    }


    public function rating(): Attribute
    {
        return Attribute::get(fn () => Number::round($this->reviews->avg('rate')));
    }
}
