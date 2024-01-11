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
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'Dashboards'
            ],
            [
                'routeName' => 'dashboard',
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-add-circle-line',
                'tKey' => 'Add New Course'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-computer-line',
                'tKey' => 'My Courses'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => ' ri-file-text-line',
                'tKey' => 'Assignments'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'bx bx-message-rounded',
                'tKey' => 'Messages'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-question-line',
                'tKey' => 'Quizzes'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-calendar-check-line',
                'tKey' => 'Grades'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home') || request()->routeIs('home'),
                'icon' => 'ri-group-line',
                'tKey' => 'Mentoring'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-file-list-2-line',
                'tKey' => 'Forum'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => 'ri-bank-card-line',
                'tKey' => 'Payments'
            ],
            [
                'routeName' => 'home',
                'active' => request()->routeIs('home'),
                'icon' => ' ri-settings-2-line',
                'tKey' => 'Settings'
            ],
            [
                'routeName' => 'home',
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
