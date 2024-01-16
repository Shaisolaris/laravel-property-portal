<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserSettingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        
    }

    public function view(User $user, UserSetting $userSetting): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, UserSetting $userSetting): bool
    {
    }

    public function delete(User $user, UserSetting $userSetting): bool
    {
    }

    public function restore(User $user, UserSetting $userSetting): bool
    {
    }

    public function forceDelete(User $user, UserSetting $userSetting): bool
    {
    }
}
