<?php

namespace Modules\General\app\Processor\Actions\Forms\Validators;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Validation\Rules\File;

class ContentInformationValidator implements Arrayable
{
    public function toArray(): array
    {
        return [
            'contents' => ['required', 'array', 'min:1'],
            'contents.*.name' => ['required', 'string', 'min:5'],
            'contents.*.lectures' => ['required', 'array', 'min:1'],
            'contents.*.lectures.*.name' => ['required', 'string'],
            'contents.*.lectures.*.video' => ['required', 'string', 'url:http,https'],
            'contents.*.lectures.*.description' => ['required', 'string'],
            'contents.*.lectures.*.note' => ['required', 'string'],
            'contents.*.lectures.*.file' => ['required', File::types(BasicInformationValidator::IMAGE_TYPES)->max(BasicInformationValidator::IMAGES_MAX_SIZE)],

            // TODO:: Need create validator for the files. This may is will be image or video
//            'contents.*.lectures.*.fields.*.file' => ['required', File::types(BasicInformationValidator::IMAGE_TYPES)->max(BasicInformationValidator::IMAGES_MAX_SIZE)],
        ];
    }

    public function messages(): array
    {
        return [
            'contents.*.lectures.*.name.required' => 'The field must not be empty',
            'contents.*.lectures.*.name.string' => 'The field must be string',

            'contents.*.lectures.*.video.required' => 'The field must not be empty',
            'contents.*.lectures.*.video.string' => 'The field must be string',
            'contents.*.lectures.*.video.url' => 'Url not valid',

            'contents.*.lectures.*.description.required' => 'The field must not be empty',
            'contents.*.lectures.*.description.string' => 'The field must be string',

            'contents.*.lectures.*.note.required' => 'The field must not be empty',
            'contents.*.lectures.*.note.string' => 'The field must be string',

            'contents.*.lectures.*.file.required' => 'The field must not be empty',
        ];
    }
}
