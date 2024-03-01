<?php

namespace Modules\General\app\Http\Requests;

use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
use App\Processor\Actions\Forms\Validators\AdvanceInformationValidator;
use App\Processor\Actions\Forms\Validators\AssignmentsValidator;
use App\Processor\Actions\Forms\Validators\BasicInformationValidator;
use App\Processor\Actions\Forms\Validators\ContentInformationValidator;
use App\Processor\Actions\Forms\Validators\QuizzesValidator;
use Illuminate\Foundation\Http\FormRequest;

class CreatingStepsRequest extends FormRequest
{
    public function rules(): array
    {
        return $this->prepareRoles();
    }

    public function messages(): array
    {
        $rules = collect(['program' => ['required', 'string']]);

        return $rules->merge(match ($this->input('name_step')) {
            'content' => app(ContentInformationValidator::class)->messages(),
            'assignments' => app(AssignmentsValidator::class)->messages(),
            default => []
        })->all();
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }

    public function prepareRoles(): array
    {
        $rules = collect(['program' => ['required', 'string']]);
        $result = collect();

        $user = $this->user();

        if($user->institution_type === EducationInstitutionTypeEnum::Academy()->value) {
            // TODO:: Need split to classes for the Academy and School. And need validate roles the User into of the Institutions
            $result = $rules->merge(match ($this->input('name_step')) {
                'base_information' => app(BasicInformationValidator::class)->toArray(),
                'advance_information' => app(AdvanceInformationValidator::class)->toArray(),
                'content' => app(ContentInformationValidator::class)->toArray(),
                'assignments' => app(AssignmentsValidator::class)->toArray(),
                default => []
            });
        } elseif($user->institution_type === EducationInstitutionTypeEnum::School()->value) {
            if($user->isOrganizer()) {
                $result = $rules->merge(match ($this->input('name_step')) {
                    'base_information' => app(BasicInformationValidator::class)->toArray(),
                    'advance_information' => app(AdvanceInformationValidator::class)->toArray(),
                    default => []
                });
            }

            if($user->isInstructor()) {
                $result = $rules->merge(match ($this->input('name_step')) {
                    'content' => app(ContentInformationValidator::class)->toArray(),
                    'assignments' => [...app(AssignmentsValidator::class)->toArray(), ...app(QuizzesValidator::class)->toArray()],
                    default => []
                });
            }
        }

        return $result->all();
    }
}
