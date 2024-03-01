<?php

namespace Modules\General\app\Traits\Functions;

use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\StudentHomeworkScore;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;

trait StudentHomeworkFunctionsTrait
{
    public function setStatusQuizModel(EiQuiz $eiQuiz): StudentHomework
    {
        $point = floatval(StudentHomeworkQuizAnswer::whereQuizId($eiQuiz->id)->sum('point'));

        if ($point < $eiQuiz->pass_mark) {
            $this->update([
                'status' => StudentHomeworkStatusEnum::NotAccepted()->value
            ]);
        } elseif ($point >= $eiQuiz->pass_mark) {
            $this->update([
                'status' => StudentHomeworkStatusEnum::Accepted()->value
            ]);
        }

        return $this;
    }

    public function toConsideration($report): bool
    {
        return $this->update(['status' => StudentHomeworkStatusEnum::OnCheck()->value, 'report' => $report]);
    }

    public function final($status): bool
    {
        return $this->update(['status' => $status]);
    }

    public function increaseTime($date): bool
    {
        return $this->update(['end_work_datetime' => $date, 'status' => StudentHomeworkStatusEnum::Expected()->value]);
    }

    public function setGrade($request): void
    {
        $assignment = EiAssignment::whereUuid($request->assignment_uuid)->first();

        $data = [
            'user_id' => auth()->id(),
            'homework_id' => $this->id,
            'model_type' => $assignment->getMorphClass(),
            'model_id' => $assignment->id,
        ];

        StudentHomeworkScore::updateOrCreate($data, [...$data, 'score' => $request->score]);
    }

    // TODO::
    public function actualizeStatus()
    {
        if($this->assignment->start_work_datetime->gt($this->assignment->end_work_datetime)) {
            //
        }
    }
}
