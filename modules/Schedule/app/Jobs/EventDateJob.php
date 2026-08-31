<?php

namespace Modules\Schedule\app\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;

class EventDateJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;


    public function __construct()
    {

    }


    public function handle(): void
    {
        $schedule = Schedule::whereStatus(ScheduleStatusEnum::Active()->value)->get();

        foreach ($schedule as $item) {
            if (!$item->event_date->isFuture()) {
                $item->update(['status' => ScheduleStatusEnum::Passed()->value]);
            }
        }
    }
}
