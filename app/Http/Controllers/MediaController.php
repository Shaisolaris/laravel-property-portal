<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserProfileRequest;

class MediaController extends Controller
{
    public function uploadProfilePhoto(UserProfileRequest $request)
    {
        try {
            $file = $request->file('photo');

            if ($file) {
                $this->user->updateProfilePhoto($file);
            }

            return back()->success(__('success.update_profile_photo'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
