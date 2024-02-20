<?php

namespace Modules\Auth\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAvatarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'avatar' => 'required',
            'bio' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }
}
