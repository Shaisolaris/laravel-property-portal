<?php

namespace Modules\Admin\app\Services;

use App\Enums\User\UserRoleEnum;
use App\Models\Role;

class RoleService
{

    public function forFilters()
    {
        return Role::query()
            ->whereNotIn('name', [UserRoleEnum::SuperAdmin()->value])
            ->get();

    }

}
