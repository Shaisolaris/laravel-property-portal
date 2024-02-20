<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EducationInstitutionCategory;

/**
 * @mixin EducationInstitutionCategory
 */
class EiCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'name' => $this->category,

            'parent' => $this->parent_id
                ? EiCategoryResource::make($this->whenLoaded('parent'))
                : null,
        ];
    }
}
