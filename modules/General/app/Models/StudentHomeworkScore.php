<?php

namespace Modules\General\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class StudentHomeworkScore extends Model
{
    protected $fillable = [
        'score',
        'user_id',
        'homework_id',
        'model_type',
        'model_id',
    ];

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
