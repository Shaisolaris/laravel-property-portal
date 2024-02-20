<?php

namespace Modules\Quiz\app\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use Modules\Quiz\app\Models\EiQuiz;
use App\Http\Controllers\Controller;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Illuminate\Database\Eloquent\Collection;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\Quiz\app\Services\AnswerService\Answer;
use Modules\Quiz\app\Http\Resources\EiQuizQuestionResource;
use Modules\General\app\Http\Resources\StudentHomeworkResource;

class EiQuizAnswerController extends Controller
{
    public function index(Request $request): Response
    {
        /** @var EiQuiz $quiz */
        $quiz = $request->route('quiz');

        return Inertia::render('Quiz::Student/AnswerPage', [
            'quiz' => EiQuizResource::make($quiz->load('questions')),
            'homeworkData' => StudentHomeworkResource::make(StudentHomework::where([
                'model_type' => $quiz->getMorphClass(),
                'model_id' => $quiz->id
            ])->first()),
            'answers' => $this->makeAnswerArray($quiz),
        ]);
    }

    public function start(Request $request)
    {
        /** @var EiQuiz $quiz */
        $quiz = $request->route('quiz');

        $studentHomework = StudentHomework::where([
            'model_type' => $quiz->getMorphClass(),
            'model_id' => $quiz->id
        ])->first();

        if (is_null($studentHomework->started_at)) {
            $now = Carbon::now("Europe/Kyiv");

            $studentHomework->started_at = $now->format('Y-m-d H:i:s');
            $studentHomework->finished_at = $now->addMinutes($quiz->duration_minutes);
            $studentHomework->save();
        }

        return redirect()->to(route('quiz.answer.index', ['quiz' => $quiz->uuid]));
    }


    public function answer(Request $request)
    {
        Answer::build($request->get('answers'));
    }


    private function makeAnswerArray(EiQuiz $quiz)
    {
        $grouped = $quiz->questions->groupBy('quiz_type_id');

        $result = [];

        /** @var Collection $groupedGetSingle */
        $groupedGetSingle = $grouped->get(EiQuizTypeEnum::Single()->value, collect());

        /** @var Collection $groupedGetMultiple */
        $groupedGetMultiple = $grouped->get(EiQuizTypeEnum::Multiple()->value, collect());

        /** @var Collection $groupedGetYesOrNo */
        $groupedGetYesOrNo = $grouped->get(EiQuizTypeEnum::YesOrNo()->value, collect());

        /** @var Collection $groupedGetShort */
        $groupedGetShort = $grouped->get(EiQuizTypeEnum::Short()->value, collect());

        if ($groupedGetSingle->count()) {
            foreach ($groupedGetSingle as $item) {
                $result['single'][] = ['title' => $item['question'], 'answer' => '', 'variants_answers' => $item->answers->pluck('answer'), 'question_id' => $item['id']];
            }
        }

        if ($groupedGetMultiple->count()) {
            foreach ($groupedGetMultiple as $item) {
                $result['multiple'][] = ['title' => $item['question'], 'answer' => [], 'variants_answers' => $item->answers->pluck('answer'), 'question_id' => $item['id']];
            }
        }

        if ($groupedGetYesOrNo->count()) {
            foreach ($groupedGetYesOrNo as $item) {
                $result['yes_or_no'][] = ['title' => $item['question'], 'answer' => '', 'variants_answers' => [
                    $item->answers[0]->answer,
                    $item->answers[1]->answer
                ], 'question_id' => $item['id']];
            }
        }

        if ($groupedGetShort->count()) {
            foreach ($groupedGetShort as $item) {
                $result['short'][] = ['title' => $item['question'], 'answer' => '', 'question_id' => $item['id']];
            }
        }

        return $result;
    }
}
