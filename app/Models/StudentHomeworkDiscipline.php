<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentHomeworkDiscipline extends Model
{
    protected $table = 'student_homework_discipline';

    protected $fillable = [
        'model_id',
        'model_type',
        'parent_model_id',
        'parent_model_type',
    ];
}
