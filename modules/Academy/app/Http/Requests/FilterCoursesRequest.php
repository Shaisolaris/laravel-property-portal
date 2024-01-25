<?php

namespace Modules\Academy\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterCoursesRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'skip' => $this->integer('skip'),
            'limit' => $this->integer('limit', 5),
            'user_id' => $this->get('user_id'),
            'sort' => $this->get('sort', 'desc'),
        ]);
    }

    public function rules(): array
    {
        return [
            'skip' => ['nullable', 'integer'],
            'limit' => ['nullable', 'integer'],
            'sort' => ['nullable', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return $this->user() || str($this->route()->getName())->contains('my-courses');
    }
}
