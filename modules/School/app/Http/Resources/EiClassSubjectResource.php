<?php

namespace Modules\School\app\Http\Resources;

use App\Http\Resources\UserResource;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserSelectResource;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EiSectionLecture;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\General\app\Http\Resources\EiSectionLectureResource;

/* @mixin EiClassSubject */
class EiClassSubjectResource extends JsonResource
{
    public function toArray($request): array
    {
        $sectionLecturesCount = 0;

        $this->sections->each(function($section) use (&$sectionLecturesCount) {
            $sectionLecturesCount += $section->lectures->count();
        });

        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'value' => $this->id,
            'label' => $this->name,
            'slug' => $this->slug,
            'language' => $this->language,
            'teachers' => $this->instructors->pluck('id'),
            'sections_count' => $this->sections->count(),
            'section_lectures_count' => $sectionLecturesCount,
            'description' => $this->description,
            'image' => MediaResource::make($this->whenLoaded('media')->last()),
            'instructors' => UserSelectResource::collection($this->whenLoaded('instructors')),
            'quizzes' => EiQuizResource::collection($this->whenLoaded('quizzes')),
            'users' => UserResource::collection($this->whenLoaded('instructors')),
        ];
    }
}
