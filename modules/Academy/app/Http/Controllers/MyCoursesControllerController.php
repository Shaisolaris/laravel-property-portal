<?php

namespace Modules\Academy\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\Academy\app\Services\FilterCourse;

class MyCoursesControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterCourse $course): \Inertia\Response
    {
        return Inertia::render('Academy::MyCourses/List', [
            'courses' => $course->filter(),
            'limit' => $course->request->get('limit')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Academy::MyCourses/Create');
    }
}
