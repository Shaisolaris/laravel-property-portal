<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Enums\User\UserRoleEnum;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\StudentHomework;
use Modules\General\app\Models\StudentHomeworkInstructor;
use Modules\Quiz\app\Models\EiQuiz;

class BindHomeworkToUserJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(
        public mixed $model,
        public EiAssignment|EiQuiz $content
    ) {
    }

    public function handle(): void
    {
        $this->model->users()->role(UserRoleEnum::Student()->value)->each(function (User $student) {
            $content = $this->content;

            $contentMorph = [
                'model_id' => $content->id,
                'model_type' => $content->getMorphClass(),
            ];

            $homework = StudentHomework::updateOrCreate([
                'user_id' => $student->id,
                'start_work_datetime' => $content->start_work_datetime,
                'end_work_datetime' => $content->end_work_datetime,
                'program_model_id' => $content->model?->id,
                'program_model_type' => $content->model->getMorphClass(),
                ...$contentMorph
            ]);

            $this->model->users()->role(UserRoleEnum::Instructor()->value)->each(
                fn ($user) =>  StudentHomeworkInstructor::updateOrCreate([
                    'homework_id' => $homework->id,
                    'instructor_id' => $user->id,
                    ...$contentMorph
                ])
            );
        });
    }
}
