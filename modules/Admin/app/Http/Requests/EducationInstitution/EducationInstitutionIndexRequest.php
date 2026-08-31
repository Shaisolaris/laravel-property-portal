<?php

namespace Modules\Admin\app\Http\Requests\EducationInstitution;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read string $search
 * @property-read string $organizer_id
 *
 */
class EducationInstitutionIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'search'                   => ['nullable', 'string', 'max:50'],
            'organizer_id'             => ['nullable', 'string'],
            'education_institution_id' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
