<?php

namespace App\Processor\Actions\Forms\Actions;

use App\Facades\Data;
use App\Processor\Services\CreateUpdateService;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Modules\General\app\Models\EiSection;
use Modules\General\app\Models\EiSectionLecture;

class CreateCurriculum
{
    protected CreateUpdateService $service;
    protected mixed $model;
    protected null|array|Collection $data = null;
    protected array $assignments = [];
    protected array $quizzes = [];


    public function __construct($data, $model)
    {
        $this->service = new CreateUpdateService();

        $this->data = $data;
        $this->model = $model;

        $this->assignments = Arr::groupBy($data->get('assignments'), 'lecture_id');

        if($data->get('quizzes')) {
            $this->quizzes = Arr::groupBy($data->get('quizzes'), 'lecture_id');
        }

        collect($data->get('contents'))->each(fn ($section) => $this->saveSection($section));
    }

    protected function saveSection($section): void
    {
        $data = [
            'name' => $section['name'],
            'model_id' => $this->model->id,
            'model_type' => $this->model->getMorphClass(),
        ];

        $modelSection = $this->actualizeSection($section, $data);

        collect($section['lectures'])->each(fn ($lecture) => $this->saveLecture($lecture, $modelSection));
    }

    protected function saveLecture($lecture, $model): void
    {
        $data = [
            'name' => $lecture['name'] ?? 'Lecture name',
            'note' => $lecture['note'],
            'video' => $lecture['video'],
            'description' => $lecture['description'],
        ];

        $modelLecture = $this->actualizeLecture($lecture, $data, $model);

        $assignments = Data::get($this->assignments, $lecture['id']);
        $quizzes = Data::get($this->quizzes, $lecture['id']);

        if (!empty($assignments)) {
            $this->saveAssignments($assignments, $modelLecture);
        }
        if (!empty($quizzes)) {
            $this->saveQuizzes($quizzes, $modelLecture);
        }
        if (isset($lecture['file'])) {
            $this->saveFile($modelLecture, $lecture['file']);
        }
    }

    private function saveAssignments($assignments, $model): void
    {
        collect($assignments)->each(fn ($assignment) => $this->service->saveAssignment($assignment, $this->model, $model));
    }

    private function saveQuizzes($quizzes, $model): void
    {
        collect($quizzes)->each(fn ($quiz) => $this->service->saveQuiz($quiz, $this->model, $model));
    }

    private function actualizeLecture($lecture, $data, $model)
    {
        if (isset($lecture['uuid'])) {
            $eiSectionLecture = EiSectionLecture::whereUuid($lecture['uuid'])->first();
            $eiSectionLecture->update($data);
        } else {
            $eiSectionLecture = $model->lectures()->create($data);
        }

        return $eiSectionLecture;
    }

    private function actualizeSection($section, $data)
    {
        if (isset($section['uuid'])) {
            $eiSection = EiSection::whereUuid($section['uuid'])->first();
            $eiSection->update($data);
        } else {
            $eiSection = $this->model->sections()->create($data);
        }

        return $eiSection;
    }

    private function saveFile($model, $file): void
    {
        $model->singleFileUpload($file, 'lecture');
    }
}
