<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserSetting;
use App\Enums\User\UserRoleEnum;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserSettingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasRole([UserRoleEnum::Student()->value, UserRoleEnum::Instructor()->value]);
    }


    public function create(User $user): bool
    {
        return $user->hasRole([UserRoleEnum::Student()->value, UserRoleEnum::Instructor()->value]);
    }


    public function update(User $user, UserSetting $userSetting): bool
    {
        return $user->hasRole([UserRoleEnum::Student()->value, UserRoleEnum::Instructor()->value])
            && $userSetting->user_id === $user->id;
    }


    public function delete(User $user, UserSetting $userSetting): bool
    {
        return $user->hasRole([UserRoleEnum::Student()->value, UserRoleEnum::Instructor()->value])
            && $userSetting->user_id === $user->id;
    }
}
