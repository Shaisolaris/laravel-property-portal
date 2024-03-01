<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\MediaResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EiSectionLecture;

/** @mixin EiSectionLecture */
class EiSectionLectureResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'slug' => $this->slug,
            'video' => $this->video,
            'description' => $this->description,
            'note' => $this->note,
            'media' => MediaResource::collection($this->whenLoaded('media')),
        ];
    }
}
