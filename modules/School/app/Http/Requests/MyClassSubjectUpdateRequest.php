<?php

namespace Modules\School\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyClassSubjectUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [

        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
