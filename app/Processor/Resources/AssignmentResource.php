<?php

namespace App\Processor\Resources;

use Modules\Assignment\app\Http\Resources\EiAssignmentResource;

class AssignmentResource
{
    public function instructor(): array
    {
        return [
            'assignments' => EiAssignmentResource::collection(auth()->user()->assignments)
        ];
    }

    public function student(): array
    {
        return $this->instructor();
    }
}
