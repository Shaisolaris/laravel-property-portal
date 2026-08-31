<?php

namespace Modules\Quiz\app\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Jobs\BindHomeworkToUserJob;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\School\app\Models\EiClass;
use Modules\Quiz\app\Models\EiQuizType;
use App\Models\StudentHomeworkDiscipline;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;

class EiQuizService
{
    public function create(array $data): EiQuiz
    {
        return $this->action(null, $data);
    }


    public function update(EiQuiz $quiz, array $data): EiQuiz
    {
        return $this->action($quiz, $data);
    }


    private function action(?EiQuiz $quiz, array $originalData): EiQuiz
    {
        DB::beginTransaction();
        $data = $originalData;

        $data = Arr::except($data, ['questions']);
        $data = Arr::add($data, 'user_id', auth()->id());
        $data = Arr::add($data, 'ei_id', auth()->user()->institution->institution->id);
        $data = Arr::renameKey($data, 'time', 'duration_minutes');
        $data = Arr::renameKey($data, 'title', 'name');

        if (!$quiz) {
            /** @var EiQuiz $quiz */
            $quiz = EiQuiz::create($data);

            StudentHomeworkDiscipline::create([
                'model_id' => $quiz->id,
                'model_type' => $quiz->getMorphClass(),
                'parent_model_id' => (new EiClass)->getMorphClass(),
                'parent_model_type' => EiClass::inRandomOrder()->value('id')
            ]);

            //TODO bind HOMEWORK FOR STUDENT
            BindHomeworkToUserJob::dispatch($quiz);

//          BindHomeworkToUserJob::dispatch($quiz)->delay($quiz->start_work_datetime);
        }

        foreach ($originalData['questions'] as $index => $question) {
            if (!empty($question)) {
                foreach ($question as $questionItem) {
                    if ($index === EiQuizTypeEnum::Single()->label || $index === EiQuizTypeEnum::Multiple()->label) {
                        !isset($questionItem['uuid']) ? $this->quizQuestionCreate($quiz, $index, $questionItem) : $this->quizQuestionUpdate($questionItem);
                    }

                    if ($index === EiQuizTypeEnum::YesOrNo()->label) {
                        /** @var EiQuizQuestion $quizQuestion */
                        $quizQuestion = $quiz->questions()->create([
                            'quiz_type_id' => EiQuizType::whereValue(EiQuizTypeEnum::YesOrNo()->label)->value('id'),
                            'question' => $questionItem['title'],
                            'point' => $questionItem['point']
                        ]);

                        $quizQuestion->answers()->create(['answer' => $questionItem['answer']['correct_answer'], 'is_correct' => true]);
                        $quizQuestion->answers()->create(['answer' => $questionItem['answer']['incorrect_answer'], 'is_correct' => false]);
                    }

                    if ($index === EiQuizTypeEnum::Short()->label) {
                        $quiz->questions()->create([
                            'quiz_type_id' => EiQuizType::whereValue(EiQuizTypeEnum::Short()->label)->value('id'),
                            'question' => $questionItem['title'],
                            'point' => $questionItem['point']
                        ]);
                    }
                }
            }

        }

        DB::commit();

        return $quiz;
    }


    private function quizQuestionCreate(EiQuiz $quiz, string $index, array $questionItem): void
    {
        /** @var EiQuizQuestion $quizQuestion */
        $quizQuestion = $quiz->questions()->create([
            'quiz_type_id' => EiQuizType::whereValue($index)->value('id'),
            'question' => $questionItem['title'],
            'point' => $questionItem['point']
        ]);

        $quizQuestion->answers()->createMany($questionItem['answers']);
    }


    private function quizQuestionUpdate(array $questionItem): void
    {
        EiQuizQuestion::whereUuid($questionItem['uuid'])->update([
            'question' => $questionItem['title'],
            'point' => $questionItem['point']
        ]);

        foreach ($questionItem['answers'] as $answer) {
            EiQuizQuestionAnswer::whereUuid($answer['uuid'])->update($answer);
        }
    }
}
