<?php

namespace Modules\School\app\Http\Controllers\Instructor;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Modules\General\app\Processor\Processor;
use App\Http\Controllers\Controller;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Services\MyClassService;
use Modules\School\app\Http\Resources\EiClassResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;

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

    public function quizzes(): Response
    {
        return Inertia::render('Quiz::Instructor/Index', [
            'classes' => EiClassResource::collection($this->service->getClasses($this->user, self::PER_PAGE))
        ]);
    }

//    public function quizCreate(): Response
//    {
//        return Inertia::render('Quiz::WrapSteps/Index', [
//            'lectures' => EiSectionLectureResource::collection($this->service->getLectures(EiClass::find(11))),
//            'grades' => GradeEnum::getLabelsValues(),
//            'quizTypes' => EiQuizTypeResource::collection(EiQuizType::orderBy('id')->get())
//        ]);
//    }
//
//    public function quizEdit(Request $request): Response
//    {
//        /** @var EiQuiz $quiz */
//        $quiz = $request->route('quiz');
//
//        return Inertia::render('Quiz::WrapSteps/Index', [
//            'lectures' => EiSectionLectureResource::collection($this->service->getLectures(EiClass::find(11))),
//            'grades' => GradeEnum::getLabelsValues(),
//            'quizTypes' => EiQuizTypeResource::collection(EiQuizType::orderBy('id')->get()),
//            'quiz' => EiQuizResource::make($quiz->load('questions'))
//        ]);
//    }

    public function subjects(string $role, string $institutionType, EiClass $eiClass): Response
    {
        return Inertia::render('School::Instructor/Subject/Index', [
            'subjects' => EiClassSubjectResource::collection($this->service->getSubjects($eiClass, self::PER_PAGE)),
            'eiClass' => EiClassResource::make($eiClass)
        ]);
    }

    public function show(Request $request)
    {
//        $eiClass = $request->route('eiClass');
//        $subject = $request->route('subject');

        return Processor::build($request)->render('forms');
    }
}
