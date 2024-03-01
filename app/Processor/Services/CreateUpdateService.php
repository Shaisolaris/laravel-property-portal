<?php

namespace App\Processor\Services;

use Illuminate\Support\Collection;
use Modules\Quiz\app\Models\EiQuiz;
use App\Jobs\BindHomeworkToUserJob;
use Modules\Quiz\app\Services\EiQuizService;
use Modules\General\app\Models\EiAssignment;
use Modules\School\app\Models\EiClassSubject;
use Modules\General\app\Models\StudentHomeworkDiscipline;

class CreateUpdateService
{
    public function saveAssignment($assignment, $model, $modelLecture): void
    {
        $materials = collect($assignment['materials']);

        $assignment = $this->transformData($assignment, $model, $materials);

        $assignmentModel = $this->actualizeAssignment($assignment, $modelLecture);

        if (!isset($assignment['uuid'])) {
            $this->assignHomeworkToDiscipline($assignmentModel, $model);
            //TODO после всего нужно нижную строчку раскоментить а ту что над ней удалить
            //BindHomeworkToUserJob::dispatch($eiClassSubject->eiClass, $assignmentModel)->delay($quiz->start_work_datetime);
            BindHomeworkToUserJob::dispatch($model->eiClass, $assignmentModel);
        }

        if ($assignmentModel) {
            $materials->each(fn ($material) => $this->saveMaterial(collect($material), $assignmentModel));
        }
    }

    public function saveQuiz($quizData, $model, $modelLecture): void
    {
        $service = new EiQuizService();

        $modelQuiz = $this->actualizeQuiz($quizData);

        $service->saveQuizWithQuestionsAnswers($modelQuiz, $model, $modelLecture, $quizData);
    }

    protected function transformData($assignment, $model)
    {
        data_forget($assignment, 'materials');

        $assignment['model_id'] = $model->id;
        $assignment['model_type'] = $model->getMorphClass();

        return $assignment;
    }

    protected function assignHomeworkToDiscipline($assignmentModel, $model): void
    {
        StudentHomeworkDiscipline::create([
            'model_id' => $assignmentModel->id,
            'model_type' => $assignmentModel->getMorphClass(),
            'parent_model_type' => $model instanceof EiClassSubject ? $model->eiClass->getMorphClass() : $model->getMorphClass(),
            'parent_model_id' => $model instanceof EiClassSubject ? $model->eiClass->value('id') : $model->value('id')
        ]);
    }

    private function saveMaterial(Collection $material, $model): void
    {
        // TODO: hasAny Это комбинация isset and empty - разверни метод посмотри его "внутрянку"
        if($material->hasAny('file') && $material->hasAny('video')) {
            $model->singleFileUpload($material['file'], 'assignments', ['video_url' => $material['video']]);
        }
    }

    private function actualizeAssignment($assignment, $modelLecture)
    {
        if (isset($assignment['uuid'])) {
            // TODO: может сюда updateOrCreate([])?
            // TODO можно, ток тестонуть нужно
            // TODO посмотри как в джобе я сделал
            $eiAssignment = EiAssignment::whereUuid($assignment['uuid'])->first();
            $eiAssignment->update($assignment);
        } else {
            $eiAssignment = $modelLecture->assignments()->create($assignment);
        }

        return $eiAssignment;
    }

    private function actualizeQuiz($quiz)
    {
        return isset($quiz['uuid']) ? EiQuiz::whereUuid($quiz['uuid'])->first() : null;
    }
}
