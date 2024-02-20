<?php

namespace Modules\General\app\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EducationInstitutionType
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class EducationInstitutionType extends Model
{
    protected $fillable = [
        'name',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
