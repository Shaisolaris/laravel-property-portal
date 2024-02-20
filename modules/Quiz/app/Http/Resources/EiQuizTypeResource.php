<?php

namespace Modules\Quiz\app\Http\Resources;

use Modules\Quiz\app\Models\EiQuizType;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin EiQuizType */
class EiQuizTypeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
            'html' => $this->html
        ];
    }
}
