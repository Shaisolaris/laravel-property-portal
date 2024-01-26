<?php

namespace Modules\Academy\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Pipeline\Pipeline;
use Inertia\Inertia;
use Modules\Academy\app\Http\Resources\EducationInstitutionCourseResource;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Pipes\ChunkCourses;
use Modules\Academy\app\Pipes\FilterByKeyWord;
use Modules\Academy\app\Pipes\FilterByType;
use Modules\Academy\app\Services\FilterCourse;

class MyCoursesControllerApi extends Controller
{
    public function filter(FilterCourse $course): \Illuminate\Http\JsonResponse
    {
        return response()->json($course->filter());
    }
}
