<?php

namespace Modules\General\app\Processor\Actions\Forms\Actions;

class CreateBenefits
{
    public function __construct($benefits, $model)
    {
        collect($benefits)->each(fn($benefit) => $model->benefits()->create([
            'name' => $benefit['value'],
            'education_institution_course_id' => $model->id
        ]));
    }
}
