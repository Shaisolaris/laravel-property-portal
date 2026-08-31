<?php

namespace Modules\Academy\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Academy\app\Services\FilterCourse;

class MyCoursesControllerApi extends Controller
{
    public function filter(FilterCourse $course): \Illuminate\Http\JsonResponse
    {
        return response()->json($course->filter());
    }
}
