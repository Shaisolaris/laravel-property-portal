<?php

namespace Modules\School\app\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Processor\Processor;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Modules\School\app\Http\Resources\EiClassResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Services\MyClassService;

class MyClassController extends Controller
{
    public function __construct(protected MyClassService $service)
    {
        parent::__construct();
    }

    public function index(): Response
    {
        return Inertia::render('School::Instructor/Class/Index', [
            'classes' => EiClassResource::collection($this->service->getClasses($this->user, self::PER_PAGE))
        ]);
    }

    public function subjects(string $role, string $institutionType, EiClass $eiClass): Response
    {
        return Inertia::render('School::Instructor/Subject/Index', [
            'subjects' => EiClassSubjectResource::collection($this->service->getSubjects($eiClass, self::PER_PAGE)),
            'eiClass' => EiClassResource::make($eiClass)
        ]);
    }

    public function curriculum(Request $request)
    {
        return Processor::build($request)->render('forms');
    }
}
