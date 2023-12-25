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
                'icon' => 'ri-bar-chart-line',
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
                'icon' => 'ri-slideshow-3-line',
                'text' => "Courses"
            ],
            [
                'href' => route('messages'),
                'active' => request()->routeIs('messages'),
                'icon' => 'bx bx-message-rounded',
                'text' => "Messages"
            ]
        ];
    }
}