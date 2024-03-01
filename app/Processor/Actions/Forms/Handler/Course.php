<?php

namespace App\Processor\Actions\Forms\Handler;

use Modules\Academy\app\Models\EducationInstitutionCourse;

class Course extends Base
{
    public function __construct($data)
    {
        $this->data = collect($data);
        $this->eloquentContent = EducationInstitutionCourse::query();
    }
}
