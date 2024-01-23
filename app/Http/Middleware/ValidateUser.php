<?php

namespace App\Http\Middleware;

use App\Enums\User\UserRoleEnum;
use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ValidateUser
{
    public static function redirectTo($route): string
    {
        return static::class . ':' . $route;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return Response|RedirectResponse|null
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {
            return Redirect::guest(URL::route('registration.otp-form'));
        }

        if(
            $user->hasRole(UserRoleEnum::get('InstructorSchool')) ||
            $user->hasRole(UserRoleEnum::get('InstructorAcademy'))
        ) {
            if(!$user->isOccupations()) {
                return to_route('registration.occupations.index');
            }
        }

        if(!$user->isUserHaveAvatarBio()) {
            return to_route('registration.profile-avatar.index');
        }

        if(!$user->isDetailData()) {
            return to_route('registration.user-detail.index');
        }

        return $next($request);
    }
}
