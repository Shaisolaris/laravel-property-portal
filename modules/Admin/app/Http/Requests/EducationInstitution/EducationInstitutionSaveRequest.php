<?php

namespace Modules\Admin\app\Http\Requests\EducationInstitution;

use Illuminate\Validation\Rule;
use App\Enums\EducationInstitutions\EiStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Modules\General\app\Models\EducationInstitutionType;

/**
 *
 * @property-read UploadedFile $image
 * @property-read string       $name
 * @property-read string       $description
 * @property-read string       $slug
 * @property-read string       $status
 * @property-read integer      $education_institution_type_id
 * @property-read string       $organizer_uuid
 *
 */
class EducationInstitutionSaveRequest extends FormRequest
{
    public function rules(): array
    {

        $institution = $this->route('institution');

        return [
            'image' => ['nullable', 'image', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::requiredIf($institution)],
            'status' => ['required', 'string', Rule::in(EiStatusEnum::toValues())],
            'education_institution_type_id' => ['required', 'integer', Rule::exists(EducationInstitutionType::class, 'id')],
//            'organizer_uuid'                => [
//                'required',
//                'string',
//                Rule::exists(User::class, 'uuid'),
//                function (string $attribute, string $uuid, Closure $fail) {
////                    $user = User::query()->where('uuid', $uuid);
//
//                    $currentInstitution = $this->route('institution');
//                    $institution = EducationInstitution::query()
//                        ->whereHas('organizers', function ($query) use ($uuid) {
//                        	/** @var Builder|User $query */
//                        	$query->where('users.uuid', $uuid);
//                        })
//                        ->first();
//
//                    if ($currentInstitution && $institution && $currentInstitution->id != $institution->id) {
//                        $fail("Already is an organizer.");
//                    }
//                },
//            ],
        ];
    }

    public function attributes()
    {
        return [
            'organizer_uuid' => 'organizer',
            'education_institution_type_id' => 'type',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
