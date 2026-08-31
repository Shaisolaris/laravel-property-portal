<?php

namespace App\Models;

use Eloquent;
use App\Traits\HasSlugTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Models\Scope\OccupationScopeTrait;
use App\Enums\EducationInstitutions\EducationInstitutionsOccupationsEnum;

/**
 * App\Models\Occupation
 *
 * @property int $id
 * @property int $education_institution_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereEducationInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereUserId($value)
 * @mixin Eloquent
 */
class Occupation extends Model
{
    use HasSlugTrait;
    use OccupationScopeTrait;


    protected $table = 'occupations';

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => EducationInstitutionsOccupationsEnum::class
    ];

    protected static string $fieldForCreateSlug = 'name';
}
