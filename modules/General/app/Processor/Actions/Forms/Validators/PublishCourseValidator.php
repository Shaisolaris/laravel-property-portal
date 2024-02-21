<?php

namespace Modules\General\app\Processor\Actions\Forms\Validators;

use Illuminate\Contracts\Support\Arrayable;

class PublishCourseValidator implements Arrayable
{
    public function toArray(): array
    {
        return [
            'message' => ['string','required'],
            'i_agree' => ['required'],
        ];
    }
}
