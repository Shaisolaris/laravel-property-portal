<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EducationInstitution
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitution whereUpdatedAt($value)
 * @mixin Eloquent
 */
class EducationInstitution extends Model
{
    protected $table = 'education_institutions';

    protected $fillable = [
        'name',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
