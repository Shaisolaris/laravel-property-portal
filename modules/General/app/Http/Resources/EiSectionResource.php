<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\General\app\Models\EiSection */
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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'lectures_count' => $this->lectures_count,
        ];
    }
}
