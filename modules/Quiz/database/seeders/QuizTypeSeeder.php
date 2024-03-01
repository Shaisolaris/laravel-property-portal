<?php

namespace Modules\Quiz\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;

class QuizTypeSeeder extends Seeder
{
    public function run(): void
    {
        EiQuizType::updateOrCreate(['name' => 'Single correct answer'], [
            'name' => 'Single correct answer',
            'value' => EiQuizTypeEnum::Single()->value,
            'html' => [
                'tag' => 'input',
                'attributes' => [
                    'type' => 'checkbox',
                    'value' => 'empty',
                    'class' => 'form-check-input pointer-events-none'
                ]
            ]
        ]);

        EiQuizType::updateOrCreate(['name' => 'Multiple correct answers'], [
            'name' => 'Multiple correct answers',
            'value' => EiQuizTypeEnum::Multiple()->value,
            'html' => [
                'tag' => 'input',
                'attributes' => [
                    'type' => 'checkbox',
                    'checked' => 'checked',
                    'class' => 'form-check-input pointer-events-none'
                ]
            ]
        ]);

        EiQuizType::updateOrCreate(['name' => 'Yes OR No'], [
            'name' => 'Yes OR No',
            'value' => EiQuizTypeEnum::YesOrNo()->value,
            'html' => [
                'tag' => 'input',
                'attributes' => [
                    'type' => 'radio',
                    'checked' => 'checked',
                    'class' => 'form-check-input pointer-events-none'
                ]
            ]
        ]);

        EiQuizType::updateOrCreate(['name' => 'Short Answer'], [
            'name' => 'Short Answer',
            'value' => EiQuizTypeEnum::Short()->value,
            'html' => [
                'type' => '',
                'tag' => 'div',
                'attributes' => [
                    'class' => 'wp-21 hp-15 border border-2 border-royal-blue'
                ]
            ]
        ]);
    }
}
