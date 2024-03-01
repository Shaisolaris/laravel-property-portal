<?php

namespace Modules\Assignment\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\General\app\Models\EiAssignment;
use Modules\General\app\Models\StudentHomework;

class StudentHomeworkRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...$this->base(),...$this->{$this->user()->roleName}()
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    protected function base(): array
    {
        return [
            'status' => ['required', 'string', Rule::in(StudentHomeworkStatusEnum::toValues())],
            'uuid' => ['required','string',Rule::exists(StudentHomework::class, 'uuid')]
        ];
    }

    protected function student(): array
    {
        return [
            'report' => ['required','min:50','string','max:1000'],
        ];
    }

    protected function instructor(): array
    {
        $total_score = EiAssignment::whereUuid($this->assignment_uuid)->value('total_score');

        if($this->functionality != 'extra-time') {  // TODO:::
            $rule = ['score' => ['required','numeric','max:'.$total_score ?? 100]];
        } else {
            $rule = ['end_work_datetime' => ['required','string']];
        }

        return $rule;
    }
}
