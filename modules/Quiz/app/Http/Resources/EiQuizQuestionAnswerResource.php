<?php

namespace Modules\Quiz\app\Http\Resources;

use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin EiQuizQuestionAnswer */
class EiQuizQuestionAnswerResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'uuid' => $this->uuid,
            'answer' => $this->answer,
            'is_correct' => $this->is_correct,
            'point' => $this->point,
        ];
    }
}
