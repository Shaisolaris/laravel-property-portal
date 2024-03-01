<?php

namespace Modules\General\app\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\General\app\Models\StudentHomeworkDiscipline
 *
 * @property int $id
 * @property string $model_type
 * @property int $model_id
 * @property string $parent_model_type
 * @property int $parent_model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|StudentHomeworkDiscipline newModelQuery()
 * @method static Builder|StudentHomeworkDiscipline newQuery()
 * @method static Builder|StudentHomeworkDiscipline query()
 * @method static Builder|StudentHomeworkDiscipline whereCreatedAt($value)
 * @method static Builder|StudentHomeworkDiscipline whereId($value)
 * @method static Builder|StudentHomeworkDiscipline whereModelId($value)
 * @method static Builder|StudentHomeworkDiscipline whereModelType($value)
 * @method static Builder|StudentHomeworkDiscipline whereParentModelId($value)
 * @method static Builder|StudentHomeworkDiscipline whereParentModelType($value)
 * @method static Builder|StudentHomeworkDiscipline whereUpdatedAt($value)
 * @mixin Eloquent
 */
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
