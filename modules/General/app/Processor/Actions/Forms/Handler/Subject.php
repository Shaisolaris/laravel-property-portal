<?php

namespace Modules\General\app\Processor\Actions\Forms\Handler;

use Modules\School\app\Models\EiClassSubject;

class Subject extends Base
{
    public function __construct($data)
    {
        $this->data = collect($data);
        $this->eloquentContent = EiClassSubject::whereUuid($this->data->get('model_id'))->first();
    }
}
