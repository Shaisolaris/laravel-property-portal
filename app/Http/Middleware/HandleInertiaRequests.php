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
//        app()->setLocale('es');
//
//        dd(app()->getLocale());
        //TODO Need Resource for user
        return [
            ...parent::share($request),
            'auth' => $request->user() ? $request->user() : null,
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
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboards'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-add-circle-line',
                'tKey' => 'Add New Course'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-computer-line',
                'tKey' => 'My Courses'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => ' ri-file-text-line',
                'tKey' => 'Assignments'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'bx bx-message-rounded',
                'tKey' => 'Messages'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-question-line',
                'tKey' => 'Quizzes'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-calendar-check-line',
                'tKey' => 'Grades'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard') || request()->routeIs('dashboard'),
                'icon' => 'ri-group-line',
                'tKey' => 'Mentoring'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-file-list-2-line',
                'tKey' => 'Forum'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-bank-card-line',
                'tKey' => 'Payments'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => ' ri-settings-2-line',
                'tKey' => 'Settings'
            ],
            [
                'routeName' => 'dashboard',
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'Logout'
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
