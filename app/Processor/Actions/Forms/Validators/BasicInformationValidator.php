<?php

namespace App\Processor\Actions\Forms\Validators;

use App\Enums\EducationInstitutions\EducationInstitutionContentTypesEnum;
use App\Enums\LanguageEnum;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class BasicInformationValidator implements Arrayable
{
    public const IMAGE_TYPES = ['jpg', 'jpeg', 'png', 'bmp', 'svg', 'webp', 'heic', 'heif'];

    public const VIDEO_TYPES = ['mp4', 'mov', 'avi', 'webm'];

    public const IMAGES_MAX_SIZE = 10240;

    public const VIDEOS_MAX_SIZE = 102400;

    public function toArray(): array
    {
        return [
            'benefits' => ['required', 'array', 'min:1'],
            'benefits.*.value' => ['required', 'string', 'max:150'],

            'title' => ['required', 'string', 'min:3'],
            'type' => ['required', 'string', 'in:' . EducationInstitutionContentTypesEnum::implode()],
            'language' => ['required', 'string', Rule::in(LanguageEnum::toValues())],

            'seo_description' => ['required', 'string', 'min:5', 'max:1000'],
            'description' => ['required', 'string', 'min:20', 'max:1000'],
            'demo_video' => ['required', 'string', 'url:http,https'],

            'thumbnail' => ['required', File::types(self::IMAGE_TYPES)->max(self::IMAGES_MAX_SIZE)],
            'cover_image' => ['required', File::types(self::IMAGE_TYPES)->max(self::IMAGES_MAX_SIZE)],
//            'demo_video' => ['required', File::types(self::VIDEO_TYPES)->max(self::VIDEOS_MAX_SIZE)],

            'base_duration' => ['required', 'string', 'date_format:H:i'],
        ];
    }
}
