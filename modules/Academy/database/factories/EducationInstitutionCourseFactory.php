<?php

namespace Modules\Academy\database\factories;

use App\Models\EducationInstitution;
use App\Models\EducationInstitutionCategories;
use App\Models\EducationInstitutionList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Academy\app\Models\EducationInstitutionCourse;

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
            'duration_minutes' => fake()->time(),
            'time' => fake()->time(),
            'description' => fake()->realText,
            'category_id' => EducationInstitutionCategories::inRandomOrder()->value('id'),
        ];
    }
}
