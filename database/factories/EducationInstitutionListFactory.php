<?php

namespace Database\Factories;

use App\Models\EducationInstitution;
use App\Models\EducationInstitutionList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EducationInstitutionListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionList::class;

    public function definition(): array
    {
        return [
            'uuid' => Str::uuid()->toString(),
            'name' => ucfirst(fake()->word),
            'slug' => fake()->slug,
            'description' => fake()->realText,
            'education_institution_id' => EducationInstitution::inRandomOrder()->value('id')
        ];
    }
}
