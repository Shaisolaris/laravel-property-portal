<?php

namespace Modules\General\app\Processor\Actions\Forms\Handler;

use App\Enums\LanguageEnum;
use Illuminate\Support\Facades\DB;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\General\app\Processor\Actions\Forms\Actions\CreateAssignments;
use Modules\General\app\Processor\Actions\Forms\Actions\CreateBenefits;
use Modules\General\app\Processor\Actions\Forms\Actions\CreateContents;
use Modules\General\app\Processor\Actions\Forms\Actions\CreateFilter;
use Modules\School\app\Models\EiClassSubject;

class Base
{
    public \Illuminate\Database\Eloquent\Builder|EiClassSubject|EducationInstitutionCourse $eloquentContent;

    public \Illuminate\Support\Collection $data;

    public function handler(): bool
    {
        return DB::transaction(function () {

            $this->setLang();
            $this->initializationAndPrepare();

            new CreateContents($this->data->get('contents'), $this->eloquentContent);
            new CreateAssignments($this->data->get('assignments'), $this->eloquentContent);

            // TODO:: Tags need to be re-synced, if we have opportunity update the data
            if($this->data->has('tags')) {
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
