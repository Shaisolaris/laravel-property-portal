<?php

namespace Modules\Academy\database\factories;

use App\Models\EducationInstitution;
use App\Models\EducationInstitutionCategories;
use App\Models\EducationInstitutionList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
            'institution_id' => EducationInstitutionList::inRandomOrder()->value('id'),
            'course_id' => EducationInstitutionCourse::inRandomOrder()->value('id'),
        ];
    }
}
