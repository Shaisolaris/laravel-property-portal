<?php

namespace Modules\Auth\app\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerifyUserData
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param int $step
     * @return Response|RedirectResponse|JsonResponse
     */
    public function handle(Request $request, Closure $next, int $step = 1): Response|RedirectResponse|JsonResponse
    {
        $user = $request->user();

        if ($step == 1) {
            if ($user->hasVerifiedEmail()) {
                return to_route('occupations.index');
            }
        }
        if ($step == 2) {
            if ($user->occupations()->get()->isNotEmpty()) {
                return to_route('profile-avatar.index');
            }
        }

        if ($step == 3) {
            if ($user->profile_photo_path && $user->bio) {
                return to_route('user-detail.index');
            }
        }

        return $next($request);

    }
}
