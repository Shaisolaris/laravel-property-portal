<?php

namespace Modules\General\app\Models;

use App\Models\User;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Modules\General\app\Models\StudentHomeworkInstructor
 *
 * @property int $id
 * @property int $instructor_id
 * @property int $homework_id
 * @method static Builder|StudentHomeworkInstructor newModelQuery()
 * @method static Builder|StudentHomeworkInstructor newQuery()
 * @method static Builder|StudentHomeworkInstructor query()
 * @method static Builder|StudentHomeworkInstructor whereId($value)
 * @method static Builder|StudentHomeworkInstructor whereInstructorId($value)
 * @method static Builder|StudentHomeworkInstructor whereStudentHomeworkId($value)
 * @mixin Eloquent
 */
class StudentHomeworkInstructor extends Model
{
    protected $fillable = [
        'instructor_id',
        'homework_id',
        'model_type',
        'model_id',
    ];

    public $timestamps = false;

    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'id'
        );
    }

    public function homework(): BelongsTo
    {
        return $this->belongsTo(StudentHomework::class, 'homework_id');
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
