<?php

namespace Modules\General\app\Processor\Actions\Forms\Actions;

use Illuminate\Support\Str;

class CreateContents
{
    public function __construct($contents, $model)
    {
        collect($contents)->each(fn ($section) => $this->createSection($section, $model));
    }

    protected function createSection($section, $model): void
    {
        $modelSection = $model->sections()->create([
            'name' => $section['name'],
            'uuid' => Str::uuid()->toString(),
            'slug' => Str::slug($section['name']),
            'model_id' => $model->id,
            'model_type' => $model->getMorphClass(),
        ]);

        collect($section['lectures'])->each(fn ($lecture) => $this->createLecture($lecture, $modelSection));
    }

    protected function createLecture($lecture, $model): void
    {
        $modelLecture = $model->lectures()->create([
            'name' => $lecture['name'] ?? 'Lecture name',
            'note' => $lecture['note'],
            'video' => $lecture['video'],
            'uuid' => Str::uuid()->toString(),
            'slug' => Str::slug($lecture['name']),
            'description' => $lecture['description'],
        ]);

        $this->saveFile($modelLecture, $lecture['file']);
    }

    protected function saveFile($model, $file): void
    {
        $model->singleFileUpload($file, 'lecture');
    }
}
