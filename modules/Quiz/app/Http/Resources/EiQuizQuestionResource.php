<?php

namespace Modules\Quiz\app\Http\Resources;

use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin EiQuizQuestion */
class EiQuizQuestionResource extends JsonResource
{
    public function toArray($request): array
    {
        $data = [
            'uuid' => $this->uuid,
            'title' => $this->question,
            'point' => $this->point,
            'type' => $this->quizType->value,
        ];

        if ($this->answers->count()) {
            if ($this->quiz_type_id === EiQuizType::whereValue(EiQuizTypeEnum::YesOrNo()->label)->value('id')) {
                $data['answer'] = [
                    'correct_answer' => $this->answers->where('is_correct', true)->value('id'),
                    'incorrect_answer' => $this->answers->where('is_correct', false)->value('id')
                ];
            } else {
                $data['answers'] = $this->whenLoaded('answers', function () {
                    return EiQuizQuestionAnswerResource::collection($this->answers);
                });
            }
        }

        return $data;
    }
}
