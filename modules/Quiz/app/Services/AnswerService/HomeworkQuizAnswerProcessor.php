<?php

namespace Modules\Quiz\app\Services\AnswerService;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\General\app\Enums\StudentHomeworkSubStatusEnum;

class HomeworkQuizAnswerProcessor
{
    public static function build(mixed $request): \Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        /** @var EiQuiz $eiQuiz */
        $eiQuiz = $request->route('quiz');

        /** @var StudentHomework $homework */
        $homework = $request->route('homework');

        $answers = $request->get('answers');

        foreach ($answers as $key => $data) {
            $answerTypeClass = __NAMESPACE__ . '\Type\\' . Str::replace('_', '', Str::title($key));

            (new $answerTypeClass($data, $key))
                ->transformData()
                ->calculatePoint()
                ->save();
        }

        if (!isset($answers['short'])) {
            $point = StudentHomeworkQuizAnswer::whereModelId($eiQuiz->id)->sum('point');

            if ($point < $eiQuiz->pass_mark) {
                $eiQuiz->homework()->update([
                    'status' => StudentHomeworkStatusEnum::NotAccepted()->value
                ]);
            } elseif ($point >= $eiQuiz->pass_mark) {
                $eiQuiz->homework()->update([
                    'status' => StudentHomeworkStatusEnum::Accepted()->value
                ]);
            }
        } else {
            $eiQuiz->homework()->update([
                'status' => StudentHomeworkStatusEnum::OnCheck()->value
            ]);
        }

        DB::commit();

        return redirect()->to(route('quiz.index'));
    }
}