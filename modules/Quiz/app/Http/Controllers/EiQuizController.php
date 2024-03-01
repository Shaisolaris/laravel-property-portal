<?php

namespace Modules\Quiz\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Processor\Processor;
use Illuminate\Support\Facades\DB;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Controllers\Controller;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\app\Services\EiQuizService;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\General\app\Http\Resources\StudentHomeworkResource;
use Modules\Quiz\app\Enums\StudentHomeworkQuizAnswerIsCorrectEnum;

class EiQuizController extends Controller
{
    public function __construct(protected EiQuizService $service)
    {
        parent::__construct();
    }

    public function index(Request $request): Response
    {
        return Processor::build($request)->render('quiz');
    }

    public function quizStudentHomework(string $role, string $institutionType, EiQuiz $eiQuiz)
    {
        $homeworks = StudentHomework::where([
            'model_type' => (new EiQuiz())->getMorphClass(),
            'model_id' => $eiQuiz->id
        ]);

        return Inertia::render('Quiz::Instructor/QuizStudentHomeworksPage', [
            'homeworks' => StudentHomeworkResource::collection($homeworks->paginate(self::PER_PAGE)),
            'eiQuiz' => EiQuizResource::make($eiQuiz)
        ]);
    }

    public function checkAnswers(string $role, string $institutionType, StudentHomework $homework)
    {
        return Inertia::render('Quiz::Instructor/QuizAnswersCheckPage', [
            'answers' => $homework->model->answerGroup('simple'),
            'homework' => StudentHomeworkResource::make($homework)
        ]);
    }

    public function updateAnswer(Request $request)
    {
        try {
            $status = $request->get('status');

            /** @var StudentHomework $homework */
            $homework = $request->route('homework');

            /** @var EiQuizQuestion $eiQuizQuestion */
            $eiQuizQuestion = EiQuizQuestion::whereUuid($request->get('question'))->first();

            /** @var StudentHomeworkQuizAnswer $studentHomeworkQuizAnswer */
            $studentHomeworkQuizAnswer = $request->route('studentHomeworkQuizAnswer');

            if ($status == StudentHomeworkStatusEnum::Accepted()->value) {
                $studentHomeworkQuizAnswer->update(['point' => $eiQuizQuestion->point, 'is_correct' => StudentHomeworkQuizAnswerIsCorrectEnum::Yes()->value]);
            } elseif ($status == StudentHomeworkStatusEnum::NotAccepted()->value) {
                $studentHomeworkQuizAnswer->update(['point' => 0, 'is_correct' => StudentHomeworkQuizAnswerIsCorrectEnum::No()->value]);
            }

            $checkOtherShortAnswer = StudentHomeworkQuizAnswer::where([
                'homework_id' => $studentHomeworkQuizAnswer->homework_id,
                'quiz_id' => $studentHomeworkQuizAnswer->quiz_id,
                'quiz_type_id' => EiQuizType::whereValue(EiQuizTypeEnum::Short()->value)->value('id'),
                'is_correct' => null
            ])->count();

            if (!$checkOtherShortAnswer) {
                $homework->setStatusQuizModel($studentHomeworkQuizAnswer->quiz);

                return redirect()->to(route('quiz.index'))->success(__('success.update_quiz_student_answer'));
            }

            return redirect()->to(route('quiz.answers', ['homework' => $homework->uuid]))->success(__('success.update_quiz_student_answer'));
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
