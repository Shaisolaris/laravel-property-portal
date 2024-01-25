<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EducationInstitutionUsers
 *
 * @property int $id
 * @property int $education_institution_list_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers whereEducationInstitutionListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUsers whereUserId($value)
 * @mixin Eloquent
 */
class EducationInstitutionUsers extends Model
{
    protected $table = 'education_institution_users';

    protected $fillable = [
        'user_id',
        'education_institution_list_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
