<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\MediaResource;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\General\app\Models\EiSectionLecture */
class EiSectionLectureResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'label' => $this->name,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'slug' => $this->slug,
            'video' => $this->video,
            'description' => $this->description,
            'note' => $this->note,
            'section_id' => $this->section_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'media_count' => $this->media_count,
            'registerMediaConversionsUsingModelInstance' => $this->registerMediaConversionsUsingModelInstance,
            'media' => MediaResource::collection($this->whenLoaded('media')),
        ];
    }
}
