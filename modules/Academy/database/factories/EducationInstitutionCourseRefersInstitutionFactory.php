<?php

namespace Modules\Academy\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitution;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

class EducationInstitutionCourseRefersInstitutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationInstitutionCourseRefersInstitution::class;

    public function definition(): array
    {
        return [
            'institution_id' => EducationInstitution::inRandomOrder()->value('id'),
            'course_id' => EducationInstitutionCourse::inRandomOrder()->value('id'),
        ];
    }
}
