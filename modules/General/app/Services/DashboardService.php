<?php

namespace Modules\General\app\Services;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Collection;
use Modules\Schedule\app\Models\Schedule;
use Modules\Schedule\app\Http\Resources\ScheduleResource;

class DashboardService
{
    public function getSchedule(User $user): \Illuminate\Database\Eloquent\Collection
    {
        $events = null;
        $daysCount = 5;
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays($daysCount);
        $dateRange = [];

        for ($day = 0; $day < $daysCount; $day++) {
            $dateRange[] = $startDate->copy()->addDays($day)->toDateString();
        }

        if ($user->isStudent()) {
            $events = $user?->myClass?->events();
        }

        if ($user->isInstructor()) {
            $events = Schedule::whereIn('parent_model_id', $user->myClasses->pluck('id'));
        }

        $events = $events->whereBetween('event_date', [$startDate, $endDate])->get()->groupBy('event_date');

        foreach ($dateRange as $day) {
            $day = Carbon::create($day)->format("Y-m-d H:i:s");

            if (isset($events[$day])) {
                $events[$day] = ScheduleResource::collection($events[$day]);
            } else {
                $events[$day] = collect();
            }
        }

        return $events;
    }

    public function getEvents(User $user): Collection
    {
        if ($user->isStudent()) {
            return $user->myClass->events()->get();
        }

        return Schedule::whereIn('parent_model_id', $user->myClasses->pluck('id'))
            ->get()
            ->groupBy('parent_model_id')
            ->map(function ($eventGroup) {
                return ScheduleResource::collection($eventGroup);
            });
    }
}
