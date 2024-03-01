<?php

namespace Modules\Quiz\app\Services;

use Illuminate\Support\Facades\DB;
use App\Jobs\BindHomeworkToUserJob;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\School\app\Models\EiClassSubject;
use Modules\General\app\Models\EiSectionLecture;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Modules\General\app\Models\StudentHomeworkDiscipline;

class EiQuizService
{
    public function saveQuizWithQuestionsAnswers(?EiQuiz $quiz, EiClassSubject $eiClassSubject, EiSectionLecture $modelLecture, array $data): EiQuiz
    {
        DB::beginTransaction();

        $quiz = $this->saveQuiz($quiz, $eiClassSubject, $modelLecture, $data);

        collect($data['questions'])->each(function($questions, $index) use ($quiz){
            collect($questions)->each(fn ($question) => $this->saveQuestion($quiz, $index, $question));
        });

        DB::commit();

        return $quiz;
    }


    private function saveQuiz(?EiQuiz $eiQuiz, EiClassSubject $eiClassSubject, EiSectionLecture $modelLecture, array $data): ?EiQuiz
    {
        $eiId = auth()->user()->institution->institution->id;

        $data['model_type'] = $eiClassSubject->getMorphClass();
        $data['model_id'] = $eiClassSubject->id;

        if (!$eiQuiz) {
            /** @var EiQuiz $eiQuiz */
            $eiQuiz = $modelLecture->quizzes()->create($data);

            StudentHomeworkDiscipline::create([
                'model_id' => $eiQuiz->id,
                'model_type' => $eiQuiz->getMorphClass(),
                'parent_model_type' => $eiClassSubject->eiClass->getMorphClass(),
                'parent_model_id' => $eiClassSubject->eiClass->id
            ]);

            //TODO после всего нужно нижную строчку раскоментить а ту что над ней удалить
            BindHomeworkToUserJob::dispatch($eiClassSubject->eiClass, $eiQuiz);
            //BindHomeworkToUserJob::dispatch($eiClassSubject->eiClass, $quiz)->delay($quiz->start_work_datetime);
        } else {
            $eiQuiz->update($data);
        }

        return $eiQuiz;
    }

    private function saveQuestion(EiQuiz $quiz, string $typeQuestion, array $questionItem): void
    {
        $data = [
            'quiz_type_id' => EiQuizType::whereValue($typeQuestion)->value('id'),
            'question' => $questionItem['title'],
            'point' => $questionItem['point']
        ];

        if (isset($questionItem['uuid'])) {
            $quizQuestion = EiQuizQuestion::whereUuid($questionItem['uuid'])->first();
            $quizQuestion->update($data);
        } else {
            /** @var EiQuizQuestion $quizQuestion */
            $quizQuestion = $quiz->questions()->create($data);
        }

        if ($typeQuestion !== EiQuizTypeEnum::Short()->value) {
            collect($questionItem['answers'])->each(fn($answer) => $this->saveAnswer($quizQuestion, $answer));
        }
    }

    private function saveAnswer(?EiQuizQuestion $quizQuestion, array $answer): void
    {
        if (isset($answer['uuid'])) {
            EiQuizQuestionAnswer::whereUuid($answer['uuid'])->update($answer);
        } else {
            $quizQuestion->answers()->create($answer);
        }
    }
}
