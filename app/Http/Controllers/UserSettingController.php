<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Inertia\Inertia;
use App\Http\Resources\TimezoneResource;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserSetting\UserPasswordRequest;
use App\Http\Requests\UserSetting\UserNotificationRequest;

class UserSettingController extends Controller
{
    public function index()
    {
        return Inertia::render("Settings", [
            'timezones' => TimezoneResource::collection(DateTimeZone::listIdentifiers())
        ]);
    }


    public function updateProfile(UserProfileRequest $request)
    {

    }


    public function updateNotification(UserNotificationRequest $request)
    {

    }


    public function updatePassword(UserPasswordRequest $request)
    {

    }
}
