<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';


    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => $request->user() ? (new UserResource($request->user()->load(['settings']))) : null,
            'navigations' => $this->setNavigations(),
            'flash' => $this->setFlush($request),
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
        ];
    }

    private function setNavigations(): Collection
    {
        $navigations = collect([
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-add-circle-line',
                'tKey' => 'add-new-course'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-computer-line',
                'tKey' => 'courses'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => ' ri-file-text-line',
                'tKey' => 'assignments'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-question-line',
                'tKey' => 'quizzes'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-calendar-check-line',
                'tKey' => 'grades'
            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard') || request()->routeIs('dashboard'),
                'icon' => 'ri-group-line',
                'tKey' => 'mentoring'
            ],
//            [
//                'route' =>route( 'dashboard',)
//                'active' => request()->routeIs('dashboard'),
//                'icon' => 'bx bx-message-rounded',
//                'tKey' => 'Messages'
//            ],
//            [
//                'route' =>route( 'dashboard',)
//                'active' => request()->routeIs('dashboard'),
//                'icon' => 'ri-file-list-2-line',
//                'tKey' => 'Forum'
//            ],
            [
                'route' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-bank-card-line',
                'tKey' => 'payments'
            ],
            [
                'route' => route('settings.index'),
                'active' => request()->routeIs('settings.index'),
                'icon' => ' ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);

        $checkAuth = Auth::check();

        if (!$checkAuth) {
            return $navigations;
        }

        $user = Auth::user();

        if ($user->hasRole([UserRoleEnum::StudentSchool()->value])) {}
        if ($user->hasRole([UserRoleEnum::StudentAcademy()->value])) {}
        if ($user->hasRole([UserRoleEnum::InstructorAcademy()->value])) {}
        if ($user->hasRole([UserRoleEnum::InstructorSchool()->value])) {}

        return $navigations;
    }

    private function setFlush($request): array
    {
        $sessions = $request->session();
        $types = ['success', 'warning', 'error', 'info'];
        $flashMessage = [];

        foreach ($types as $type) {
            if ($sessions->has($type)) {
                $flashMessage = $sessions->get($type);
                break;
            }
        }

        \Log::info('setFlush', $flashMessage);

        return $flashMessage;
    }
}
