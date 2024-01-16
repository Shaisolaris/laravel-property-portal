<?php

namespace Modules\Auth\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyOtpCode extends FormRequest
{
    public function rules(): array
    {
        return [
            'otp' => ['required', 'numeric', 'digits:4']
        ];
    }

    public function authorize(): bool
    {
        return boolval($this->user()->getOtpCode());
    }
}
