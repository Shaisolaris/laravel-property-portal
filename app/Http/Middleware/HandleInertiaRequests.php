<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';


    public function share(Request $request): array
    {
        //TODO Need Resource for user
        return [
            ...parent::share($request),
            'auth' => $request->user() ? $request->user() : null,
            'navigation' => $this->setNavigations(),
            'flash' => $this->setFlush($request),
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
        ];
    }

    private function setNavigations(): Collection
    {
        $navigations = collect([]);

        $checkAuth = Auth::check();

        if (!$checkAuth) {
            return collect([]);
        }

        $user = Auth::user();

        if ($user->hasRole([UserRoleEnum::StudentSchool()->label])) {}
        if ($user->hasRole([UserRoleEnum::StudentAcademy()->label])) {}
        if ($user->hasRole([UserRoleEnum::InstructorAcademy()->label])) {}
        if ($user->hasRole([UserRoleEnum::InstructorSchool()->label])) {}

        return $navigations;
    }

    private function setFlush($request): array
    {
        $sessions = $request->session();
        $flashMessage = [];

        if ($sessions->has('success')) {
            $flashMessage = [
                'text' => $sessions->get('success'),
                'type' => 'success'
            ];
        } else if ($sessions->has('warning')) {
            $flashMessage = [
                'text' => $sessions->get('warning'),
                'type' => 'warning'
            ];
        } else if ($sessions->has('error')) {
            $flashMessage = [
                'text' => $sessions->get('error'),
                'type' => 'danger'
            ];
        } else if ($sessions->has('info')) {
            $flashMessage = [
                'text' => $sessions->get('info'),
                'type' => 'danger'
            ];
        }

        return $flashMessage;
    }
}
