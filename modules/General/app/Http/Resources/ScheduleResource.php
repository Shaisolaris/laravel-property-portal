<?php

namespace Modules\General\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    public function toArray($request): array
    {
        return [];
    }
}
/**
 * {
 * id: 112,
 * title: 'Meeting With Designer',
 * start: new Date(y, m, d, 12, 30),
 * allDay: false,
 * className: 'bg-success-subtle',
 * location: 'Head Office, US',
 * extendedProps: {
 * department: 'Meeting'
 * },
 * description: 'Tell how to boost website traffic'
 * },
 *
 * {
 * id: 991,
 * title: 'Repeating Event',
 * start: new Date(y, m, d + 4, 16, 0),
 * end: new Date(y, m, d + 9, 16, 0),
 * allDay: false,
 * className: 'bg-primary-subtle',
 * location: 'Las Vegas, US',
 * extendedProps: {
 * department: 'Repeating Event'
 * },
 * description: 'A recurring or repeating event is simply any event that you will occur more than once on your calendar. ',
 * },
 */