<?php

namespace Modules\Academy\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\General\app\Models\EducationInstitutionCategory;

class EducationInstitutionCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionCourse::class;

    public function definition(): array
    {
        return [
            'title' => ucfirst(fake()->name),
            'type' => 1, // TODO::
            'language' => fake()->languageCode,
            'base_duration' => fake()->time(),
            'advance_duration' => fake()->time(),
            'description' => fake()->realText,
            'category_id' => EducationInstitutionCategory::inRandomOrder()->value('id'),
        ];
    }
}
