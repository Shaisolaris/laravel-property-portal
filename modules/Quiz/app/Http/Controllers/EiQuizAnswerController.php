<?php

namespace Modules\Quiz\app\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Controllers\Controller;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\Quiz\app\Services\AnswerService\HomeworkQuizAnswerProcessor;
use Modules\General\app\Http\Resources\StudentHomeworkResource;

class EiQuizAnswerController extends Controller
{
    public function index(Request $request): Response
    {
        /** @var EiQuiz $eiQuiz */
        $eiQuiz = $request->route('quiz');
        $answerGroupViewType = $eiQuiz->homework->status->value == StudentHomeworkStatusEnum::Expected() ? 'default' : 'simple';

        return Inertia::render('Quiz::Student/AnswerPage', [
            'quiz' => EiQuizResource::make($eiQuiz->load('questions')),
            'homeworkData' => StudentHomeworkResource::make($eiQuiz->homework),
            'answers' => $eiQuiz->answerGroup($answerGroupViewType),
            'answerGroupViewType' => $answerGroupViewType
        ]);
    }

    public function start(Request $request)
    {
        $now = Carbon::now();

        /** @var EiQuiz $eiQuiz */
        $eiQuiz = $request->route('quiz');
        $studentHomework = $eiQuiz->homework;

        if (!in_array($studentHomework->status->value, [StudentHomeworkStatusEnum::Accepted()->value, StudentHomeworkStatusEnum::OnCheck()->value])) {
            $studentHomework->update([
                'started_at' => $now->format('Y-m-d H:i:s'),
                'finished_at' => $now->addMinutes($eiQuiz->duration_minutes)->format('Y-m-d H:i:s'),
                'status' => StudentHomeworkStatusEnum::Expected()->value,
            ]);
        }

        if ($studentHomework->status->value === StudentHomeworkStatusEnum::Expected()->value && $studentHomework->attempts <= $eiQuiz->attempts) {
            $studentHomework->increment('attempts');
        }

        return redirect()->to(route('quiz.answer.index', ['quiz' => $eiQuiz->uuid]));
    }


    public function answer(Request $request)
    {
        try {
            return HomeworkQuizAnswerProcessor::build($request);
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
