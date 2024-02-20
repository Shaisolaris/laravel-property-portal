<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitutionCategory;

class EducationInstitutionCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionCategory::class;

    public function definition(): array
    {
        return [
            'parent_id' => EducationInstitutionCategory::inRandomOrder()->value('id'),
            'category' => ucfirst(fake()->word),
        ];
    }
}
