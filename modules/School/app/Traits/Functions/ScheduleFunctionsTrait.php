<?php

namespace Modules\School\app\Traits\Functions;

use Carbon\Carbon;
use App\Models\User;
use Modules\Schedule\app\Models\Schedule;

trait ScheduleFunctionsTrait
{
    public static function getBalance(User $user): int
    {
        if ($user->isInstructor()) {
            $balance = 0;
            $time = 0;

            $user->myClasses->each(function ($class_) use (&$balance, $time) {
                $hourlyRate = $class_->hourly_rate / 60;
                $timePairs = Schedule::where([['event_date', '<', now()], ['parent_model_id', $class_->id]])
                    ->pluck('event_end_time', 'event_start_time');

                if (!$timePairs->isEmpty()) {
                    foreach ($timePairs as $startTime => $endTime) {
                        $start = Carbon::createFromTimeString($startTime);
                        $end = Carbon::createFromTimeString($endTime);

                        $time += $end->diffInMinutes($start);
                    }

                    $balance = $time * $hourlyRate;
                }
            });

            return $balance;
        }

        return 0;
    }
}
