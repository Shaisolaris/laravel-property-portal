<?php

namespace Database\Factories;

use App\Models\EducationInstitutionList;
use App\Models\EducationInstitutionUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'education_institution_list_id' => EducationInstitutionList::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
