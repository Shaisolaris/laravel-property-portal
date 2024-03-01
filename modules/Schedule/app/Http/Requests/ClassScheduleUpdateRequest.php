<?php

namespace Modules\Schedule\app\Http\Requests;

use Carbon\Carbon;
use App\Rules\UniqueFieldRule;
use Illuminate\Validation\Rule;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\School\app\Models\EiClassSubject;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;

class ClassScheduleUpdateRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $data = request()->all();

        if (isset($data['event']) && is_array($data['event'])) {
            $data = request()->event;

            if ($data['subject']) {
                $data['model_type'] = EiClassSubject::find($data['subject'])->getMorphClass();
                $data['model_id'] = $data['subject'];
            }
        }

        $this->merge($data);
    }


    public function rules(): array
    {
        return [
            'lesson_link' => 'required|url',
            'event_date' => 'required|date_format:Y-m-d|' . request()->method === 'POST' ? 'after_or_equal:today' : '',
            'user_id' => 'required|integer|exists:users,id',
            'event_end_time' => 'required|date_format:H:i',
            'event_start_time' => 'required|date_format:H:i',
            'subject' => 'required|integer|exists:ei_class_subjects,id',
            'status' => ['required', 'string', Rule::in(ScheduleStatusEnum::toValues())],
        ];
    }


    public function messages(): array
    {
        return [
            'user_id.required' => 'The instructor field is required.',
            'user_id.exists' => 'The selected instructor is invalid.',
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
