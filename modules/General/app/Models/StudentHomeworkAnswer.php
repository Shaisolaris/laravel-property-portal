<?php

namespace Modules\General\app\Models;

use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Model;

class StudentHomeworkAnswer extends Model
{
    use HasUuidTrait;


    protected $table = 'student_homework_answers';

    protected $fillable = [
        'point',
        'answer',
        'model_id',
        'model_type',
        'question_id',
        'homework_id',
        'question_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'answer' => 'array'
    ];
}
