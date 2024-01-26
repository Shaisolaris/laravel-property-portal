<?php

namespace Modules\Academy\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\Academy\app\Services\FilterCourse;

class MyCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterCourse $filterCourse): \Inertia\Response
    {
        return Inertia::render('Academy::MyCourses', [
            'courses' => $filterCourse->filter(),
            'limit' => $filterCourse->request->get('limit')
        ]);
    }
}
