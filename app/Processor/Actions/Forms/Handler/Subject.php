<?php

namespace App\Processor\Actions\Forms\Handler;

use Modules\School\app\Models\EiClassSubject;

class Subject extends Base
{
    public function __construct($data)
    {
        $this->data = collect($data);
        $this->eloquentContent = EiClassSubject::whereUuid($this->data->get('subject'))->first();
    }
}
