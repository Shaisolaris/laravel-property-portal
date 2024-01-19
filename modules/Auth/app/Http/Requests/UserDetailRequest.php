<?php

namespace Modules\Auth\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDetailRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => $this->user()->id
        ]);
    }

    public function rules(): array
    {
        return [
            'account_type' => 'required|string|min:2|max:255',
            'account_holder_name' => 'required|string|min:2|max:255',
            'account_number' => 'required|string|min:16|max:16',
            'extra_information' => 'required|string',
            'business_document_path' => 'required|file',
            'registration_scan_path' => 'required|file',
        ];

    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }
}
