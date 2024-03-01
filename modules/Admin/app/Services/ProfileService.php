<?php

namespace Modules\Admin\app\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\app\Http\Requests\Profile\ChangePasswordRequest;
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

    public function changePassword(ChangePasswordRequest $request): User
    {
        /** @var User $user */
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            abort(404);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return $user;

    }

}
