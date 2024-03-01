<?php

namespace App\Processor\Actions\Forms\Validators;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Validation\Rule;
use Modules\General\app\Models\EducationInstitutionCategory;

class AdvanceInformationValidator implements Arrayable
{
    public function toArray(): array
    {
        return [
            'advance_duration' => ['required', 'string','date_format:H:i'],
            'category_id' => ['required', Rule::exists(EducationInstitutionCategory::class, 'id')],
//            'levels' => ['array','required','min:1', Rule::in(UserExperienceEnum::toValues())],
//            'languages' => ['array','required','min:1', Rule::in(LanguageEnum::toValues())],
//            'topics' => '',

            'tags' => ['array','required','min:1'],
            'tags.*' => ['required', 'alpha_num:ascii', 'lowercase', 'min:2', 'max:25'],
        ];
    }
}
