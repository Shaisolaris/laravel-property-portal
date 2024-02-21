<?php

namespace Modules\General\app\Processor\Actions\Forms\Actions;

class CreateAssignments
{
    public function __construct($assignments, $model)
    {
        collect($assignments)->each(fn ($assignment) => $this->createAssignment($assignment, $model));
    }

    protected function createAssignment($assignment, $model): void
    {
        $materials = collect($assignment['materials']);

        data_forget($assignment, 'materials');

        $assignment['model_id'] = $model->id;
        $assignment['model_type'] = $model->getMorphClass();
        $assignment['links_to_video'] = $materials->map(fn ($material) => $material['video'])->all();

        if($assignmentModel = $model->assignments()->create($assignment)) {
            $materials->each(fn ($material) => $this->saveMaterial($material['file'], $assignmentModel));
        }
    }

    protected function saveMaterial($file, $model): void
    {
        $model->singleFileUpload($file, 'assignments');
    }
}
