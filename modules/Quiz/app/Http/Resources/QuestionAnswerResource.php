<?php

namespace Modules\Quiz\app\Http\Resources;

use App\Facades\Time;
use Illuminate\Http\Request;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;

/* @mixin EiQuizQuestion */
class QuestionAnswerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $studentHomeworkQuizAnswer = StudentHomeworkQuizAnswer::whereQuestionId($this->id)->first();
        $user = $studentHomeworkQuizAnswer->user;
        $quiz = $studentHomeworkQuizAnswer->quiz;
        $homework = $studentHomeworkQuizAnswer->homework;

        $data = [
            'uuid' => $studentHomeworkQuizAnswer->uuid,
            'question_uuid' => $this->uuid,
            'question' => $this->question,
            'model_name' => $quiz?->model?->name,
            'quiz_title' => $quiz->name,
            'status' => $homework->status->label,
            'total_score' => $studentHomeworkQuizAnswer->point,
            'is_correct' => $studentHomeworkQuizAnswer->is_correct,
            'assigned' => Time::getTimezoneDate($homework->start_work_datetime, 'd M Y'),
            'deadline' => Time::getTimezoneDate($homework->start_work_datetime, 'd M Y'),
            'user' => [
                'avatar' => $user->profile_photo_url,
                'full_name' => $user->full_name
            ],
            'answers' => []
        ];

        EiQuizQuestionAnswer::whereQuizQuestionId($this->id)->each(function ($answer) use (&$data, $studentHomeworkQuizAnswer) {
            $data['answers'][] = [
                'answer' => $answer->answer,
                'is_correct' => in_array($answer->uuid, $studentHomeworkQuizAnswer->current_answers)
            ];
        });

        if ($studentHomeworkQuizAnswer->correct_answers == null) {
            $data['answers'] = $studentHomeworkQuizAnswer->current_answers;
        }

        return $data;
    }
}
