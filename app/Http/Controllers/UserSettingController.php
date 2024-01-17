<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Inertia\Inertia;
use App\Enums\User\UserGenderEnum;
use Illuminate\Support\Facades\Hash;
use App\Enums\User\UserLanguageEnum;
use App\Http\Resources\TimezoneResource;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserSetting\UserNotificationRequest;
use App\Http\Requests\UserSetting\UserEmailPasswordRequest;

class UserSettingController extends Controller
{
    public function index()
    {
        return Inertia::render("Settings/Index", [
            'timezones' => TimezoneResource::collection(DateTimeZone::listIdentifiers()),
            'genders' => UserGenderEnum::getGenders(),
            'languages' => UserLanguageEnum::getLanguages(),
        ]);
    }


    public function updateProfile(UserProfileRequest $request)
    {
        try {
            $this->user->update($request->all());

            return back()->success(__('success.update_profile'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function updateNotification(UserNotificationRequest $request)
    {
        try {
            foreach ($request->all() as $key => $value) {
                $this->user->settings()->update(["notification_settings->$key" => $value]);
            }

            return back()->success(__('success.update_notification_settings'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function updateEmailPassword(UserEmailPasswordRequest $request)
    {
        try {
            if ($request->has('email')) {
                $this->user->update(['email' => $request->get('email')]);

                return back()->success(__('success.update_email'));
            } else {
                $this->user->update(['password' => Hash::make($request->get('new_password'))]);

                return back()->success(__('success.update_password'));
            }
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
