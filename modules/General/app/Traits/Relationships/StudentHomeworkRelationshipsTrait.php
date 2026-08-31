<?php

namespace Modules\General\app\Traits\Relationships;

use Illuminate\Database\Eloquent\Relations\MorphTo;

trait StudentHomeworkRelationshipsTrait
{
    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'id'
        );
    }
}