<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EducationInstitution;

/**
 * @mixin EducationInstitution
 */
class EducationInstitutionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
            'status' => $this->status,
            'type' => $this->institutionType->name,
            'image_url' => $this->getMedia('image')[0]?->original_url ?? null,
        ];
    }
}
