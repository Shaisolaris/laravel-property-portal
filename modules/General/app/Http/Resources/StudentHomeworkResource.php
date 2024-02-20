<?php

namespace Modules\General\app\Http\Resources;

use App\Facades\Time;
use Illuminate\Http\Request;
use Modules\General\app\Models\StudentHomework;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin StudentHomework */
class StudentHomeworkResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'user_id' => $this->user_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'status' => $this->status,
            'sub_status' => $this->sub_status,
            'attempts' => $this->attempts,
            'start_work_datetime' => $this->start_work_datetime,
            'end_work_datetime' => $this->end_work_datetime,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'timer' => [
                'time_limit' => $this->model?->duration_minutes ? $this->model->duration_minutes * 60 : 0,
                'max_time_seconds' => Time::timeLimit($this->started_at, $this->model?->duration_minutes)
            ]
        ];
    }
}
