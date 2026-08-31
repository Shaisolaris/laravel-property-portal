<?php

namespace Modules\Admin\app\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\app\Http\Requests\Profile\ProfileSaveRequest;

class ProfileService
{
    public function updateProfile(ProfileSaveRequest $request): User
    {

        /** @var User $user */
        $user = Auth::user();

        $avatarFile = $request->file('avatar');

        if($avatarFile) {
            $user->updateProfilePhoto($avatarFile);
        }

        $user->update($request->validated());


        return $user;

    }

}
