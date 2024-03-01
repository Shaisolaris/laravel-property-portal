<?php

namespace Modules\General\app\Http\Resources;

use App\Facades\Time;
use Illuminate\Http\Request;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Resources\UserResource;
use Modules\General\app\Models\StudentHomework;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\Assignment\app\Http\Resources\EiAssignmentResource;

/** @mixin StudentHomework */
class StudentHomeworkResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'user_id' => $this->user_id,
            'model' => $this->model instanceof EiQuiz ? EiQuizResource::make($this->model) : EiAssignmentResource::make($this->model),
            'status' => $this?->status?->label,
            'sub_status' => $this->sub_status,
            'attempts' => $this->attempts,
            'start_work_datetime' => $this->start_work_datetime,
            'end_work_datetime' => $this->end_work_datetime,
            'started_at' => Time::getTimezoneDate($this->started_at),
            'finished_at' => Time::getTimezoneDate($this->finished_at),
            'student' => UserResource::make($this->student),
            'is_timer' => $this->isShowTimer(),
            'is_questions' => $this->isShowQuestions(),
            'is_question_answers' => $this->isShowQuestionAnswers(),
            'enabled_buttons' => $this->enabledButtons(),
            'quiz_grade' => $this->quiz_grade,
            'timer' => $this->setTimerData()
        ];
    }

    private function isAvailableAttempts(): bool
    {
        return $this->attempts < $this->model->attempts;
    }

    private function enabledButtons(): bool
    {
        return $this->status->value === StudentHomeworkStatusEnum::Expected()->value;
    }

    private function isShowTimer(): bool
    {
        return $this->status->value === StudentHomeworkStatusEnum::Expected()->value && $this->isAvailableAttempts()
            || (
                $this->status->value === StudentHomeworkStatusEnum::NotAccepted()->value
                && $this->status->value !== StudentHomeworkStatusEnum::OnCheck()->value
                && $this->isAvailableAttempts()
            );
    }

    private function isShowQuestions(): bool
    {
        return $this->status->value === StudentHomeworkStatusEnum::Expected()->value;
    }

    private function isShowQuestionAnswers(): bool
    {
        return ($this->status->value !== StudentHomeworkStatusEnum::Expected()->value && $this->status->value !== StudentHomeworkStatusEnum::OnCheck()->value) && $this->end_work_datetime->isPast();
    }

    private function setTimerData(): array
    {
        return $this->model instanceof EiQuiz ? [
            'time_limit' => $this->model?->duration_minutes ? $this->model->duration_minutes * 60 : 0,
            'max_time_seconds' => Time::timeLimit($this->started_at, $this->model?->duration_minutes)
        ] : [
            'time_limit' => 0,
            'max_time_seconds' => 0,
        ];
    }
}
