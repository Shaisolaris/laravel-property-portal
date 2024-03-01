<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;

class ScheduleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function handle(): void
    {
        Schedule::whereStatus(ScheduleStatusEnum::Pending()->value)->each(function ($schedule) {
            $eventDate = Carbon::parse($schedule->event_date)->format('Y-m-d');
            $startTime = Carbon::parse($schedule->event_start_time)->format('H:i');
            $endTime = Carbon::parse($schedule->event_end_time)->format('H:i');

            $startDateTime = Carbon::parse($eventDate . ' ' . $startTime);
            $endDateTime = Carbon::parse($eventDate . ' ' . $endTime);
            $now = Carbon::now();

            if ($now->between($startDateTime, $endDateTime)) {
                $schedule->update(['status' => ScheduleStatusEnum::Active()->value]);
            }

            if ($endDateTime->isPast()) {
                $schedule->update(['status' => ScheduleStatusEnum::Passed()->value]);
            }
        });
    }
}
