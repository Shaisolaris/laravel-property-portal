<?php

namespace Modules\General\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatingStepsRequest extends FormRequest
{
    public function rules(): array
    {
        return [

        ];
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }
}
