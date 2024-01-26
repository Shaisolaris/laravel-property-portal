<?php

namespace Modules\Academy\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\Academy\app\Services\FilterCourse;

class MyCoursesController extends Controllerll
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterCourse $filterCourse): \Inertia\Response
    {
        return Inertia::render('Academy::MyCourses/List', [
            'courses' => $filterCourse->filter(),
            'limit' => $filterCourse->request->get('limit')
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
