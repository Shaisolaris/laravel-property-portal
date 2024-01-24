<?php

namespace Modules\Academy\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Pipeline\Pipeline;
use Inertia\Inertia;
use Modules\Academy\app\Http\Resources\EducationInstitutionCourseResource;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Pipes\ChunkCourses;
use Modules\Academy\app\Pipes\FilterByKeyWord;
use Modules\Academy\app\Pipes\FilterByType;

class MyCoursesControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {

        $filter = app(Pipeline::class)
            ->send(EducationInstitutionCourse::query())
            ->through([
                FilterByKeyWord::class,
                FilterByType::class,
                ChunkCourses::class,
            ])
            ->thenReturn();

        $courses = EducationInstitutionCourseResource::collection($filter->get());

        return Inertia::render('Academy::MyCourses/List', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Academy::MyCourses/Create');
    }
}
