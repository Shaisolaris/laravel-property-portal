<?php

namespace Modules\Academy\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Http\Resources\EiCategoryResource;

class EducationInstitutionCourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'time' => $this->time,
            'type' => $this->type,
            'title' => $this->title,
            'language' => $this->language,
            'description' => $this->description,
            'base_duration' => $this->base_duration,
            'advance_duration' => $this->advance_duration,
            'rate' => rand(2, 1000), // TODO:: Need make the service class
            'image' => 'https://picsum.photos/800/600?random='.rand(1, 1000),
            'im_subscription' => '',
            'info' => [
                ['name' => "lecture", 'icon' => "las la-comment"],
                ['name' => "section", 'icon' => "las la-list-ol"],
                ['name' => "time", 'icon' => "las la-clock"],
            ],

            'category' => EiCategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
