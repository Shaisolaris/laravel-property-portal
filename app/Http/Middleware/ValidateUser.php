<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class ValidateUser
{
    public static function redirectTo($route): string
    {
        return static::class . ':' . $route;
    }

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {
            return Redirect::guest(URL::route('registration.otp-form'));
        }

        if ($user->hasRole(UserRoleEnum::Instructor()->value)) {
            if (!$user->isOccupations()) {
                return to_route('registration.occupations.index');
            }
        }

        if (!$user->isUserHaveAvatarBio()) {
            return to_route('registration.profile-avatar.index');
        }

        if (!$user->isDetailData()) {
            return to_route('registration.user-detail.index');
        }

        if ($user->onReview() || $user->hasStatus([UserStatusEnum::Ban()->value, UserStatusEnum::Rejected()->value])) {
            return to_route('registration.waiting-window');
        }

        return $next($request);
    }
}
