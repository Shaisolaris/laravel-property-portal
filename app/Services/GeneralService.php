<?php

namespace App\Services;

class GeneralService
{
    public function menu(): array
    {

        return [
            [
                'href' => route('welcome'),
                'active' => request()->routeIs('welcome'),
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
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
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
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-group-line',
                'text' => "Mentoring"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-file-list-2-line',
                'text' => "Forum"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-bank-card-line',
                'text' => "Payments"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => ' ri-settings-2-line',
                'text' => "Setting"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-settings-2-fill',
                'text' => "Edit Profile"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-lock-password-fill',
                'text' => "Change Password"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'ri-logout-box-r-line',
                'text' => "Logout"
            ]
        ];
    }
}