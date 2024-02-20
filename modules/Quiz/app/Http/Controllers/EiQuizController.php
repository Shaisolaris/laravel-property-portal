<?php

namespace Modules\Quiz\app\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Controllers\Controller;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\app\Services\EiQuizService;
use Modules\General\app\Processor\Processor;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\Quiz\app\Http\Requests\UpdateOrCreateQuizRequest;
use Modules\General\app\Http\Resources\EducationInstitutionResource;

class EiQuizController extends Controller
{
    public function __construct(protected EiQuizService $service)
    {
        parent::__construct();
    }


    public function index(Request $request)
    {
        return Processor::build($request)->render('quiz');
    }


    public function store(UpdateOrCreateQuizRequest $request)
    {
        try {
            $quiz = $this->service->create($request->all());

            return redirect()->to(route('school.my-class.quiz.edit', $quiz->uuid))->success(__('success.create_quiz'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function update(UpdateOrCreateQuizRequest $request)
    {
        try {
            /** @var EiQuiz $routeQuiz */
            $routeQuiz = $request->route('quiz');

            $quiz = $this->service->update($routeQuiz, $request->all());

            return redirect()->to(route('school.my-class.quiz.edit', $quiz->uuid))->success(__('success.update_quiz'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function destroy(Request $request)
    {
        /** @var EiQuizQuestion $quizQuestion */
        $quizQuestion = $request->route('quizQuestion');

        $quizQuestion->answers()->delete();
        $quizQuestion->delete();
    }
}
