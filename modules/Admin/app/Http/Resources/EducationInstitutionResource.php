<?php

namespace Modules\Admin\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EducationInstitution;

/** @mixin EducationInstitution
 */
class EducationInstitutionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                            => $this->id,
            'uuid'                          => $this->uuid,
            'name'                          => $this->name,
            'description'                   => $this->description,
            'slug'                          => $this->slug,
            'status'                        => $this->status,
            'status_label'                  => $this->status->label,
            'education_institution_type_id' => $this->education_institution_type_id,
            'image_url'                     => $this->getMedia('image')[0]?->original_url ?? null,
            'institution_type_name'         => $this->whenLoaded('institutionType', function () {
                return $this->institutionType->name;
            }),
//            'organizers'         => $this->whenLoaded('organizers', function () {
//                return UserResource::collection($this->organizers);
//            }),
            'organizer'         => $this->whenLoaded('organizers', function () {
                return count($this->organizers) ? UserResource::make($this->organizers[0]) : null;
            }),
        ];
    }
}
