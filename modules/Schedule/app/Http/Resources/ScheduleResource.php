<?php

namespace Modules\Schedule\app\Http\Resources;

use Carbon\Carbon;
use App\Models\User;
use App\Facades\Time;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;
use Modules\Academy\app\Models\EducationInstitutionCourse;

/* @mixin Schedule */
class ScheduleResource extends JsonResource
{
    public function toArray($request): array
    {
        $eventDate = Carbon::parse($this->event_date)->format('Y-m-d');
        $eventStartTime = Carbon::parse($this->event_start_time)->format('H:i');
        $eventEndTime = Carbon::parse($this->event_end_time)->format('H:i');

        return [
            'uuid' => $this->uuid,
            'id' => $this->uuid,
            'title' => $this->model?->name,
            'full_title' => $this->getTitle(),
            'event_start_time' => $eventStartTime,
            'event_end_time' => $eventEndTime,
            'event_date' => $eventDate,
            'lesson_link' => $this->lesson_link,
            'subject' => $this->model?->id,
            'status' => $this->status->value,
            'status_label' => $this->status->label,
            'user_id' => $this->user_id,
            'user_full_name' => User::find($this->user_id)->full_name,
            'start' => Carbon::parse($eventDate . ' ' . $eventStartTime)->format('Y-m-d'),
            'end' => Carbon::parse($eventDate . ' ' . $eventEndTime)->format('Y-m-d'),
            'allDay' => false,
            'time' => "$eventStartTime - $eventEndTime",
            'className' => $this->getClassName(),
            'is_future' => Carbon::create($eventDate . ' ' . $eventEndTime)->isFuture(),
        ];
    }

    private function getClassName(): string
    {
        $eventDate = Carbon::parse($this->event_date)->format('Y-m-d');
        $eventEndTime = Carbon::parse($this->event_end_time)->format('H:i');

        if ($this->status->value === ScheduleStatusEnum::Canceled()->value) {
            return 'event-canceled';
        }

        $className = 'event-future';

        if ((!$this->event_date->isFuture() && !$this->event_date->equalTo(Carbon::now()->format('Y-m-d'))) || Carbon::create("$eventDate $eventEndTime")->isPast()) {
            $className = 'event-not-future';
        }

        if ($this->event_date->equalTo(Carbon::now()->format('Y-m-d'))) {
            $className = 'event-today';
        }

        return $className;
    }


    private function getTitle(): string|array
    {
        if ($this->parentModel && auth()->user()->isInstructor()) {
            return ['parentName' => 'Class ('. $this->parentModel?->name .')', 'modelName' => 'Subject (' . $this->model?->name . ')'];
        }

        return $this->model?->name;
    }
}
