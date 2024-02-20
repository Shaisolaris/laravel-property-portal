<?php

namespace Modules\Admin\app\Http\Requests\EducationInstitution;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\General\app\Models\EducationInstitutionType;
use App\Enums\EducationInstitutions\EducationInstitutionStatusEnum;

/**
 *
 * @property-read string  $name
 * @property-read string  $description
 * @property-read string  $slug
 * @property-read string  $status
 * @property-read integer $education_institution_type_id
 * @property-read array   $organizers_uuids
 *
 */
class EducationInstitutionSaveRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'name'                          => ['required', 'string', 'max:255'],
            'description'                   => ['required', 'string', 'max:255'],
            'slug'                          => ['nullable', 'string', 'max:255'],
            'status'                        => ['nullable', 'string',  Rule::in(EducationInstitutionStatusEnum::toValues())],
            'education_institution_type_id' => ['required', 'integer', Rule::exists(EducationInstitutionType::class, 'id')],
            'organizers_uuids'              => ['nullable', 'array'],
            'organizers_uuids.*'            => ['nullable', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
