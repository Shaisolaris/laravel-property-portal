<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class GeneralService
{
    public function menu(): array
    {
        $role = Auth::user()->roleName;

        return match ($role) {
            "teacher" => [
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
                    'href' => route('instructor.academy.courses.index'),
                    'active' => request()->routeIs('instructor.academy.courses.index'),
                    'icon' => 'ri-computer-line',
                    'text' => "My Courses"
                ],
                [
                    'href' => route('instructor.school.assignment.index'),
                    'active' => request()->routeIs('instructor.school.assignment.index'),
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
            ],
            default => [
                [
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                    'icon' => 'ri-layout-left-line',
                    'text' => "Dashboards"
                ],
                [
                    'href' => route('add-new-class'),
                    'active' => request()->routeIs('add-new-class'),
                    'icon' => 'ri-add-circle-line',
                    'text' => "Add New Course"
                ],
                [
                    'href' => route('classes'),
                    'active' => request()->routeIs('classes'),
                    'icon' => 'ri-computer-line',
                    'text' => "My Courses"
                ],
                [
                    'href' => route('instructor.academy.assignment.index'),
                    'active' => request()->routeIs('instructor.academy.assignment.index'),
                    'icon' => ' ri-file-text-line',
                    'text' => "Assignments"
                ],
                [
                    'href' => route('grades'),
                    'active' => request()->routeIs('grades'),
                    'icon' => 'bx bx-message-rounded',
                    'text' => "Messages"
                ],
                [
                    'href' => route('mentorship'),
                    'active' => request()->routeIs('mentorship'),
                    'icon' => 'ri-group-line',
                    'text' => "Mentoring"
                ],
                [
                    'href' => route('podcast'),
                    'active' => request()->routeIs('podcast'),
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
            ],
        };
    }
}
