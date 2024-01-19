<?php

namespace App\Http\Middleware;

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

        if(!$this->isOccupations($user)) {
            return to_route('registration.occupations.index');
        }

        if(!$this->isUserHaveAvatarBio($user)) {
            return to_route('registration.profile-avatar.index');
        }

        if(!$this->isDetailData($user)) {
            return to_route('registration.user-detail.index');
        }

        return $next($request);
    }

    public function isOccupations($user): bool
    {
        return $user->occupations() && $user->occupations()->get()->isNotEmpty();
    }

    public function isUserHaveAvatarBio($user): bool
    {
        return $user->bio && $user->profile_photo_url;
    }

    public function isDetailData($user): bool
    {
        return $user->detail && $user->detail()->get()->isNotEmpty();
    }
}
