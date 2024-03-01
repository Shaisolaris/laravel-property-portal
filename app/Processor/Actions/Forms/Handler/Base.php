<?php

namespace App\Processor\Actions\Forms\Handler;

use App\Enums\LanguageEnum;
use App\Processor\Actions\Forms\Actions\CreateBenefits;
use App\Processor\Actions\Forms\Actions\CreateCurriculum;
use App\Processor\Actions\Forms\Actions\CreateFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\School\app\Models\EiClassSubject;
use Throwable;

class Base
{
    public Builder|EiClassSubject|EducationInstitutionCourse $eloquentContent;

    public Collection $data;

    /**
     * @throws Throwable
     */
    public function handler(): bool
    {
        return DB::transaction(function () {
            $this->setLang();
            $this->initializationAndPrepare();

            new CreateCurriculum($this->data, $this->eloquentContent);

            // TODO:: Tags need to be re-synced, if we have opportunity update the data
            if($this->data->has('tags') && !empty($this->data->get('tags'))) {
                $this->eloquentContent->syncTags($this->data['tags']);
            }

            return true;
        });
    }

    protected function initializationAndPrepare(): void
    {
        // TODO::
        if($this->eloquentContent instanceof EducationInstitutionCourse) {

            $this->eloquentContent = $this->eloquentContent->create($this->data->all());
            $this->saveMedia();

            new CreateBenefits($this->data->get('benefits'), $this->eloquentContent);
        }

        new CreateFilter($this->data); // TODO::
    }

    protected function setLang(): void
    {
        if($this->data->get('language')) {
            $this->data['language'] = collect(LanguageEnum::getLanguages())->filter(fn ($lang) => $lang['value'] == $this->data['language'])->first()['code'];
        }
    }

    protected function saveMedia(): void
    {
        $collection = $this->data['program'];

        $this->eloquentContent->singleFileUpload($this->data['thumbnail'], $collection);
        $this->eloquentContent->singleFileUpload($this->data['cover_image'], $collection);
    }
}
