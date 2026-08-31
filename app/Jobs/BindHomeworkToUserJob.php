<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Models\StudentHometask;
use App\Enums\User\UserRoleEnum;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\General\app\Models\StudentHomework;

class BindHomeworkToUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public mixed $homeworkType)
    {

    }

    public function handle(): void
    {
//        $students = $this->homeworkType->institution->peoples()->role(UserRoleEnum::Student()->value)->get();
//
//        foreach ($students as $student) {
//            $data = [
//                'user_id' => $student->id,
//                'model_id' => $this->homeworkType->id,
//                'model_type' => $this->homeworkType->getMorphClass(),
//                'start_work_datetime' => $this->homeworkType->start_work_datetime,
//                'end_work_datetime' => $this->homeworkType->end_work_datetime,
//            ];
//
//            StudentHomework::updateOrCreate($data, $data);
//        }
    }
}
