<?php

namespace App\Services;

use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class HandleInertiaRequestService
{
    public function userResponse($request)
    {
        return $request->user()
            ? UserResource::make($request->user()->load(['settings', 'roles']))->response()->getData(true)
            : null;
    }


    public function setNavigations(): Collection
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

//        $user = Auth::user();
//        if ($user->hasRole([UserRoleEnum::Student()->value])) {}
//        if ($user->hasRole([UserRoleEnum::Instructor()->value])) {}

        return $navigations;
    }


    public function setFlush($request): array
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

        return $flashMessage;
    }
}