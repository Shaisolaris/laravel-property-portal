<?php

namespace App\Processor\Actions\Forms\Validators;

use App\Enums\LanguageEnum;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Validation\Rule;

class AssignmentsValidator implements Arrayable
{
    public function toArray(): array
    {
        return [
            'assignments' => ['required','array','min:1'],
            'assignments.*.name' => ['required','string','min:5'],
            'assignments.*.start_work_datetime' => ['required','string'],
            'assignments.*.end_work_datetime' => ['required','string'],
            'quizzes.*.lecture_id' => 'required|integer',
            'assignments.*.description' => ['required','string','max:1000'],
            'assignments.*.total_score' => ['required','int'],
            'assignments.*.passing_score' => ['required','int'],
            'assignments.*.language' => ['required','string',Rule::in(LanguageEnum::toValues())],
//            'assignments.*.materials.*.video' => ['string','url:http,https'],
//            'assignments.*.materials.*.file' => [File::types(BasicInformationValidator::IMAGE_TYPES)->max(BasicInformationValidator::IMAGES_MAX_SIZE)],
        ];
    }

    public function messages(): array
    {
        return [
            'assignments.*.name.required' => 'The field must not be empty',
            'assignments.*.name.string' => 'The field must be string',
            'assignments.*.name.min' => "Cannot be less :min characters",

            'assignments.*.start_work_datetime.required' => 'The field must not be empty',
            'assignments.*.start_work_datetime.string' => 'The field must be string',

            'assignments.*.end_work_datetime.required' => 'The field must not be empty',
            'assignments.*.end_work_datetime.string' => 'The field must be string',

            'assignments.*.description.required' => 'The field must not be empty',
            'assignments.*.description.string' => 'The field must be string',
            'assignments.*.description.max' => "Cannot be more than :max characters",

            'assignments.*.total_score.required' => 'The field must not be empty',
            'assignments.*.total_score.int' => 'The field must be integer',

            'assignments.*.passing_score.required' => 'The field must not be empty',
            'assignments.*.passing_score.string' => 'The field must be integer',

            'assignments.*.language.required' => 'The field must not be empty',
            'assignments.*.language.string' => 'The field must be string',

            'assignments.*.materials.*.file.file' => 'Field must be a file',
            'assignments.*.materials.*.file.required' => 'The field must not be empty',

            'assignments.*.materials.*.video.url' => 'Url not valid',
            'assignments.*.materials.*.video.required' => 'The field must not be empty',
            'assignments.*.materials.*.video.string' => 'The field must be string'
        ];
    }
}
