<?php

namespace Modules\Auth\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAvatarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'avatar' => ['required', 'mimes:jpg,jpeg,png', 'max:10240'],
            'bio' => ['string','required','min:10','max:1000']
        ];
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }
}
