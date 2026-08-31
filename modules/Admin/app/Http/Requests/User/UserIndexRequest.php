<?php

namespace Modules\Admin\app\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read string $search
 *
 */
class UserIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'search' => ['nullable', 'string', 'max:50'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
