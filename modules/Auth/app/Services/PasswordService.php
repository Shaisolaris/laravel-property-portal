<?php

namespace Modules\Auth\app\Services;

use App\Enums\User\UserStatusEnum;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\General\app\Processor\Actions\Forms\Handler\Classes;
use Modules\General\app\Processor\Actions\Forms\Handler\Course;

class PasswordService
{
    protected Course|Classes $model;

    public function __construct()
    {

    }

    public function canSetPassword(?string $uuid, ?string $token): bool
    {
        if(!$uuid || !$token) {
            return false;
        }

        $user = User::query()
            ->where('uuid', $uuid)
            ->where('password_set_token', $token)
            ->where('password_set_until', '>', Carbon::now())
            ->first();

        if(!$user || $user->password) {
            // User not found OR user has password
            return false;
        }

        return true;
    }

    public function setPassword(string $uuid, string $token, string $password): User|null
    {
        if(!$this->canSetPassword($uuid, $token)) {
            return null;
        }

        $user = User::query()->where('uuid', $uuid)->first();

        $user->password = Hash::make($password);
        $user->status = UserStatusEnum::Active()->value;
        $user->password_set_token = null;
        $user->save();

        return $user;
    }
}
