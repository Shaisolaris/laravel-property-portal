<?php

namespace App\Traits\Models\Scope;

use App\Enums\User\UserRoleEnum;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;

trait UserScopeTrait
{
    public function scopeOnlyOrganisers(Builder $query): Builder
    {
        return
            $query->whereHas('roles', function ($query) {
                /** @var Builder|Role $query */
                $query->where('name', UserRoleEnum::Organizer()->value);
            });
    }
}
