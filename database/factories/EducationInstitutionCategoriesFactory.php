<?php

namespace Database\Factories;

use App\Models\EducationInstitutionCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationInstitutionCategoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionCategories::class;

    public function definition(): array
    {
        return [
            'parent_id' => EducationInstitutionCategories::inRandomOrder()->value('id'),
            'category' => ucfirst(fake()->word),
        ];
    }
}
