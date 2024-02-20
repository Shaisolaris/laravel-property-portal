<?php

namespace Modules\School\database\factories;

use App\Enums\LanguageEnum;
use Illuminate\Support\Carbon;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassSubjectFactory extends Factory
{
    protected $model = EiClassSubject::class;

    public const SUBJS = [
        "Mathematics",
        "Science",
        "English Language & Literature",
        "Foreign Languages",
        "History",
        "Geography",
        "Physical Education",
        "Art",
        "Music",
        "Computer Science",
        "Social Studies",
        "Civics",
        "Economics",
        "Health Education",
        "Psychology",
        "Environmental Science",
        "Drama/Theater Arts",
    ];

    public function definition(): array
    {
        ;
        return [
            'name' => fake()->randomElement(self::SUBJS),
            'description' => fake()->realText(),
            'language' => fake()->randomElement(LanguageEnum::getLabelsValues())['value'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'class_id' => EiClass::inRandomOrder()->value('id'),
        ];
    }
}
