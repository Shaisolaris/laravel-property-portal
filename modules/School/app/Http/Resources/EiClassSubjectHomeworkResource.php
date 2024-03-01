<?php

namespace Modules\School\app\Http\Resources;

use App\Http\Resources\UserResource;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserSelectResource;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EiSectionLecture;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\General\app\Http\Resources\EiSectionResource;
use Modules\General\app\Http\Resources\EiSectionLectureResource;

/* @mixin EiClassSubject */
class EiClassSubjectHomeworkResource extends EiClassSubjectResource
{
    public function toArray($request): array
    {
        $array = parent::toArray($request);

        return [
            ...$array,
            'homework_done' => $this->homeworks->where('status', StudentHomeworkStatusEnum::Accepted()->value)->count(),
            'homework_waiting' => $this->homeworks->where('status', StudentHomeworkStatusEnum::Expected()->value)->count(),
            'lessons' => EiSectionResource::collection($this->whenLoaded('sections')),
        ];
    }
}
