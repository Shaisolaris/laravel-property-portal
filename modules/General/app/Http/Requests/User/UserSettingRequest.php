<?php

namespace Modules\General\app\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserSettingRequest extends FormRequest
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
