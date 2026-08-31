<?php

namespace Modules\Academy\app\Services;

use Exception;
use Modules\General\app\Models\EducationInstitution;
use Modules\Academy\app\Models\EducationInstitutionCourseUserCourses;

class SubscribeToCourse
{
    /**
     * @throws Exception
     */
    public static function submit(int $course_id, int $academy_id): bool
    {
        $academy = EducationInstitution::find($academy_id);

        if ($academy && $academy->courses->contains($course_id)) {
            EducationInstitutionCourseUserCourses::create([
                'education_institution_id' => $academy_id,
                'course_id' => $course_id,
                'user_id' => auth()->id()
            ]);

            return true;
        } else {
            return false;
        }
    }
}
