<?php

namespace Modules\General\app\Resources;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\StudentHomeworkScore;

/* @mixin StudentHomeworkScore */
class StudentHomeworkScoreResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'score' => $this->score,
            'student' => UserResource::make($this->whenLoaded('user')),
        ];
    }
}
