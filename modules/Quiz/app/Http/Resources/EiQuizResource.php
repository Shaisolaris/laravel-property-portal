<?php

namespace Modules\Quiz\app\Http\Resources;

use App\Facades\Time;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Resources\UserResource;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Illuminate\Database\Eloquent\Collection;
use Modules\General\app\Models\StudentHomework;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin EiQuiz */
class EiQuizResource extends JsonResource
{
    public function toArray($request): array
    {
        $questions = $this->whenLoaded('questions', function () {
            $grouped = $this->questions->groupBy('quiz_type_id');

            $result = [];

            /** @var Collection $groupedGetSingle */
            $groupedGetSingle = $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Single()->value)->value('id'), collect());

            /** @var Collection $groupedGetMultiple */
            $groupedGetMultiple = $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Multiple()->value)->value('id'), collect());

            /** @var Collection $groupedGetYesOrNo */
            $groupedGetYesOrNo = $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::YesOrNo()->value)->value('id'), collect());

            /** @var Collection $groupedGetShort */
            $groupedGetShort = $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Short()->value)->value('id'), collect());

            if ($groupedGetSingle->count()) {
                $result['single'] = EiQuizQuestionResource::collection($groupedGetSingle);
            }

            if ($groupedGetMultiple->count()) {
                $result['multiple'] = EiQuizQuestionResource::collection($groupedGetMultiple);
            }

            if ($groupedGetYesOrNo->count()) {
                $result['yes_or_no'] = EiQuizQuestionResource::collection($groupedGetYesOrNo);
            }

            if ($groupedGetShort->count()) {
                $result['short'] = EiQuizQuestionResource::collection($groupedGetShort);
            }

            return $result;
        });

        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'language' => $this->language,
            'lecture_id' => $this->lecture_id,
            'grade' => $this->grade,
            'is_available_attempts' => $this->getHomework()?->attempts < $this->attempts,
            'status' => $this->getHomework()?->status->label,
            'quiz_grade' => $this?->getHomework()?->my_grade,
            'total_score' => $this->total_score,
            'description' => $this->description,
            'pass_mark' => $this->pass_mark,
            'duration_minutes' => $this->duration_minutes,
            'attempts' => $this->attempts,
            'points_no_answer' => $this->points_no_answer,
            'points_wrong_answer' => $this->points_wrong_answer,
            'start_work_datetime' => $this->start_work_datetime->format('Y-m-d H:i:00'),
            'start_work_datetime_format_dmy' => $this->start_work_datetime->format('d M Y H:i'),
            'end_work_datetime_format_dmd' => Time::getTimezoneDate($this->end_work_datetime, 'M d, D H:i'),
            'end_work_datetime' => $this->end_work_datetime->format('Y-m-d H:i:00'),
            'questions_count' => $this->questions_count,
            'students_count' => $this->students_count,
            'questions' => $questions,
            'model_name' => $this?->model->name,
            'instructor' => UserResource::make($this->whenLoaded('instructor')),
        ];
    }
}
