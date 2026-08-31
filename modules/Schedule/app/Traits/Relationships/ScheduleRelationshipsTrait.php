<?php

namespace Modules\Schedule\app\Traits\Relationships;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait ScheduleRelationshipsTrait
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

    public function parentModel(): MorphTo
    {
        return $this->morphTo(
            '',
            'parent_model_type',
            'parent_model_id',
            'id'
        );
    }

    public function creator()
    {
        return $this->hasOne(User::class, 'id', 'creator_user_id');
    }
}
