<?php

namespace Modules\Admin\app\Http\Requests\Country;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 *
 * @property-read string  $code
 * @property-read string  $name
 * @property-read string  $local_name
 * @property-read boolean $is_free
 *
 */
class CountrySaveRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'code' => Str::upper($this->get('code')),
        ]);
    }

    public function rules(): array
    {

        /** @var Country|null $country */
        $country = $this->route('country');

        return [

            'code'       => ['required', 'string', 'max:2', Rule::unique(Country::class, 'code')->ignore($country?->code, 'code')],
            'name'       => ['required', 'string', 'max:255'],
            'local_name' => ['nullable', 'string', 'max:255'],
            'is_free'    => ['nullable', 'boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
