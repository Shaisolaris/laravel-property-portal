<?php

namespace Modules\Schedule\app\Services;

use Modules\School\app\Models\EiClass;
use Modules\Schedule\app\Models\Schedule;

class ScheduleService
{
    public function createSchedule(array $data, EiClass $eiClass): void
    {
        foreach ($data['events'] as $event) {
            $event['parent_model_type'] = $eiClass->getMorphClass();
            $event['parent_model_id'] = $eiClass->id;
            $event['creator_user_id'] = auth()->id();

            Schedule::create($event);
        }
    }


    public function updateSchedule(Schedule $schedule, EiClass $eiClass, array $data): Schedule
    {
        $data['parent_model_type'] = $eiClass->getMorphClass();
        $data['parent_model_id'] = $eiClass->id;
        $schedule->update($data);

        return $schedule;
    }
}
