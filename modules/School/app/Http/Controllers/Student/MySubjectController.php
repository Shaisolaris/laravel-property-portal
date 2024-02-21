<?php

namespace Modules\School\App\Http\Controllers\Student;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\School\app\Services\MySubjectService;
use Modules\School\app\Http\Resources\EiClassSubjectResource;

class MySubjectController extends Controller
{
    public function __construct(protected MySubjectService $service)
    {
        parent::__construct();
    }


    public function index(Request $request): Response
    {
        return Inertia::render('School::Student/Subject/Index', [
            'subjects' => EiClassSubjectResource::collection($this->service->getSubjects($this->user, self::PER_PAGE))
        ]);
    }
}
