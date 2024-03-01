<?php

namespace Modules\Admin\app\Http\Requests\User;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 *
 * @property-read string $search
 * @property-read string $role_name
 *
 */
class UserIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'search' => ['nullable', 'string', 'max:50'],
            'role_name' => ['nullable', 'string', Rule::exists(Role::class, 'name')],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
