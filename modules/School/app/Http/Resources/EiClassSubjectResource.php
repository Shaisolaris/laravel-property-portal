<?php

namespace Modules\School\app\Http\Resources;

use App\Http\Resources\UserResource;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserSelectResource;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin EiClassSubject */
class EiClassSubjectResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'value' => $this->id,
            'label' => $this->name,
            'slug' => $this->slug,
            'language' => $this->language,
            'teachers' => $this->instructors->pluck('id'),
            'description' => $this->description,
            'image' => MediaResource::make($this->whenLoaded('media')->last()),
            'instructors' => UserSelectResource::collection($this->whenLoaded('instructors')),
            'users' => UserResource::collection($this->whenLoaded('instructors')),
        ];
    }
}
