<?php

namespace Modules\Auth\app\Services;

use App\Enums\User\UserStatusEnum;
use App\Models\User;
use App\Models\UserPasswordToken;
use App\Processor\Actions\Forms\Handler\Course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\app\Services\UserService;
use Modules\General\app\Processor\Actions\Forms\Handler\Classes;

class PasswordService
{

    public function __construct(protected UserService $adminUserService)
    {

    }

    public function canSetPassword(?string $uuid, ?string $token): bool
    {
        if(!$uuid || !$token) {
            return false;
        }

        $user = User::query()
            ->where('uuid', $uuid)
			->whereHas('passwordToken', function ($query) use ($token) {
				/** @var UserPasswordToken|Builder $query */
				$query->where('token', $token);
				$query->where('valid_until', '>', Carbon::now());
			})
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
        $user->email_verified_at = Carbon::now();
        $user->save();

		$this->adminUserService->removePasswordToken($user);

        return $user;
    }
}
