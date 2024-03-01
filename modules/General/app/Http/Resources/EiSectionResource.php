<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use Modules\General\app\Models\EiSection;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin EiSection */
class EiSectionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'label' => $this->name,
            'uuid' => $this->uuid,
            'slug' => $this->slug,
            'name' => $this->name,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'lectures' => EiSectionLectureResource::collection($this->whenLoaded('lectures')),
        ];
    }
}
