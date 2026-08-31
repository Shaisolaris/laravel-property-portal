<?php

namespace Modules\Quiz\app\Http\Resources;

use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Resources\UserResource;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Illuminate\Database\Eloquent\Collection;
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
            $groupedGetSingle = $grouped->get(EiQuizTypeEnum::Single()->value, collect());

            /** @var Collection $groupedGetMultiple */
            $groupedGetMultiple = $grouped->get(EiQuizTypeEnum::Multiple()->value, collect());

            /** @var Collection $groupedGetYesOrNo */
            $groupedGetYesOrNo = $grouped->get(EiQuizTypeEnum::YesOrNo()->value, collect());

            /** @var Collection $groupedGetShort */
            $groupedGetShort = $grouped->get(EiQuizTypeEnum::Short()->value, collect());

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
            'grade_passing_score' => $this->grade_passing_score,
            'description' => $this->description,
            'pass_mark' => $this->pass_mark,
            'duration_minutes' => $this->duration_minutes,
            'number_attempts' => $this->number_attempts,
            'points_no_answer' => $this->points_no_answer,
            'points_wrong_answer' => $this->points_wrong_answer,
            'start_work_datetime' => $this->start_work_datetime->format('Y-m-d H:i:00'),
            'end_work_datetime_format_dmy' => $this->end_work_datetime->format('M d, D H:i'),
            'end_work_datetime' => $this->end_work_datetime->format('Y-m-d H:i:00'),
            'questions' => $questions,
            'instructor' => UserResource::make($this->whenLoaded('instructor')),
        ];
    }
}
