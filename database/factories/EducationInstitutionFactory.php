<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitution;
use Modules\General\app\Models\EducationInstitutionType;

class EducationInstitutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitution::class;

    public function definition(): array
    {
        return [
            'uuid' => Str::uuid()->toString(),
            'name' => ucfirst(fake()->word),
            'slug' => fake()->slug,
            'description' => fake()->realText,
            'education_institution_type_id' => EducationInstitutionType::inRandomOrder()->value('id')
        ];
    }
}
