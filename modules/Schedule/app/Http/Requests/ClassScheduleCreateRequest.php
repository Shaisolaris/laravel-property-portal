<?php

namespace Modules\Schedule\app\Http\Requests;

use Carbon\Carbon;
use App\Rules\UniqueFieldRule;
use App\Rules\UniqueArrayFieldRule;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\School\app\Models\EiClassSubject;

class ClassScheduleCreateRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $data = $this->all();

        if (isset($data['events']) && is_array($data['events'])) {
            $modifiedItems = array_map(function ($item) {
                $item['event_date'] = request()->event_date;

                if (isset($item['subject'])) {
                    $item['model_type'] = EiClassSubject::find($item['subject'])->getMorphClass();
                    $item['model_id'] = $item['subject'];
                }

                return $item;
            }, $data['events']);

            $data['events'] = $modifiedItems;
        }

        $this->merge($data);
    }


    public function rules(): array
    {
        $rules = [
            'events' => 'required|array',
            'events.*.lesson_link' => 'required|url',
            'events.*.event_date' => 'required|date_format:Y-m-d',
            'events.*.user_id' => 'required|integer|exists:users,id',
            'events.*.event_end_time' => 'required|date_format:H:i',
            'events.*.event_start_time' => 'required|date_format:H:i',
        ];

        foreach (request()->events as $index => $event) {
            $eventRules = ['required', 'integer', 'exists:ei_class_subjects,id'];

            if ($event['subject']) {
                $eventRules[] = new UniqueArrayFieldRule(request()->events, 'subject');

                if (Carbon::create($event['event_date'])->format('Y-m-d') === Carbon::now()->format('Y-m-d')) {
                    $eventRules[] = new UniqueFieldRule(Schedule::class, 'model_id', 'model_id', $event['subject'], [
                        'event_date' => $event['event_date'],
                        'parent_model_id' => $this->route('eiClass')->id
                    ]);
                }
            }

            $rules["events.$index.subject"] = $eventRules;
        }

        return $rules;
    }


    public function authorize(): bool
    {
        return true;
    }
}
