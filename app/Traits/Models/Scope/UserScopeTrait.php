<?php

namespace App\Traits\Models\Scope;

use App\Models\Role;
use App\Models\User;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

/**
 * @see User
 */
trait UserScopeTrait
{
    public function scopeOnlyOrganisers(Builder $query): Builder
    {
        return $query->role(UserRoleEnum::Organizer()->value);
    }

    public function scopeStatus(Builder $query, mixed $status): Builder
    {
        if (gettype($status) === 'string') {
            return $query->where('status', $status);
        }

        if (is_array($status)) {
            $query->whereIn('status', $status);
        }

        if ($status instanceof Collection) {
            $query->whereIn('status', $status->toArray());
        }

        return $query;
    }
}
