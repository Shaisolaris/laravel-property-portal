<?php

namespace App\Services;

class GeneralService
{
    public function menu(): array
    {

        return [
            [
                'href' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'ri-layout-left-line',
                'text' => "Dashboards"
            ],
            [
                'href' => route('add-new-course'),
                'active' => request()->routeIs('add-new-course'),
                'icon' => 'ri-add-circle-line',
                'text' => "Add New Course"
            ],
            [
                'href' => route('courses'),
                'active' => request()->routeIs('courses'),
                'icon' => 'ri-computer-line',
                'text' => "My Courses"
            ],
            [
                'href' => route('assignments'),
                'active' => request()->routeIs('assignments'),
                'icon' => ' ri-file-text-line',
                'text' => "Assignments"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'bx bx-message-rounded',
                'text' => "Messages"
            ],
            [
                'href' => route('mentoring'),
                'active' => request()->routeIs('mentoring'),
                'icon' => 'ri-group-line',
                'text' => "Mentoring"
            ],
            [
                'href' => route('forum'),
                'active' => request()->routeIs('forum'),
                'icon' => 'ri-file-list-2-line',
                'text' => "Forum"
            ],
            [
                'href' => route('payments'),
                'active' => request()->routeIs('payments'),
                'icon' => 'ri-bank-card-line',
                'text' => "Payments"
            ],
            [
                'href' => route('settings'),
                'active' => request()->routeIs('settings'),
                'icon' => ' ri-settings-2-line',
                'text' => "Setting"
            ],
            [
                'href' => route('profile'),
                'active' => request()->routeIs('profile'),
                'icon' => 'ri-settings-2-fill',
                'text' => "Edit Profile"
            ],
            [
                'href' => route('change-password'),
                'active' => request()->routeIs('change-password'),
                'icon' => 'ri-lock-password-fill',
                'text' => "Change Password"
            ],
            [
                'href' => route('logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'text' => "Logout"
            ]
        ];
    }
}