<?php

namespace Modules\Academy\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

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
            'duration_minutes' => $this->duration_minutes,
            'rate' => rand(2, 1000), // TODO::
            'category' => ucfirst(fake()->word),  // TODO::
            'image' => 'https://picsum.photos/800/600?random='.rand(1, 1000),
            'info' => [
                ['name' => "lecture", 'icon' => "las la-comment"],
                ['name' => "section", 'icon' => "las la-list-ol"],
                ['name' => "time", 'icon' => "las la-clock"],
            ]
        ];
    }
}
