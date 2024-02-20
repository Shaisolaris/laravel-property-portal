<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitution;
use Modules\General\app\Models\EducationInstitutionUser;

class EducationInstitutionUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionUser::class;

    public function definition(): array
    {
        return [
            'education_institution_id' => EducationInstitution::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
