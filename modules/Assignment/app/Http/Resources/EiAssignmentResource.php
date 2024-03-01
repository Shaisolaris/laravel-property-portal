<?php

namespace Modules\Assignment\app\Http\Resources;

use App\Facades\Time;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Modules\General\app\Models\EiAssignment;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\StudentHomework;
use Modules\General\app\Models\StudentHomeworkInstructor;
use Modules\General\app\Resources\StudentHomeworkScoreResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;

/* @mixin EiAssignment */
class EiAssignmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // lecture_id

        /** @var StudentHomework $homework */
        $homework = $this->getHomework();
        $homework_grade = null;

        if($homework && $homework->grade) {
            $homework_grade = StudentHomeworkScoreResource::make($homework->grade);
        }

        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'slug' => $this->slug,
            'language' => $this->language,
            'description' => $this->description,
            'lecture_id' => $this->lecture_id,
            'total_score' => $this->total_score,
            'passing_score' => $this->passing_score,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,

            'start_work_datetime' => Time::getTimezoneDate($this->start_work_datetime),
            'end_work_datetime' => Time::getTimezoneDate($homework?->end_work_datetime ?? $this->end_work_datetime),
            'actual_end_work_datetime' => Time::getTimezoneDate($this->end_work_datetime),

            'status' => $homework ? $homework->status->value : '',
            'report' => $homework?->report ?? '',
            'homework_uuid' => $homework?->uuid ?? '',
            'actual_score' => $homework_grade?->score ?? null,

            'materials' => MediaResource::collection($this->getMedia('assignments')),
            'subject' => $this->whenLoaded('model') ? EiClassSubjectResource::make($this->model) : [], // TODO::
            'student' => $homework ? UserResource::make($homework->student) : [],
            'mentors' => $homework ? UserResource::collection($homework->instructors) : [],
            'grade' => $homework_grade,

            'expanded_brief' => false,
            'expanded_material' => false,
            'expanded_load_work' => false,
        ];
    }

    // TODO::
    protected function getHomework()
    {
        if($this->homework instanceof StudentHomeworkInstructor) {
            return $this->homework->homework;
        } else {
            return $this->homework;
        }
    }
}
