<?php

namespace Modules\Admin\app\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read string  $value
 *
 */
class CountrySetFreeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'value' => ['nullable', 'boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
