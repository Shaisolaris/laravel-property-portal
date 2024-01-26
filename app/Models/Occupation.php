<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Traits\General\SlugTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * App\Models\Occupation
 *
 * @property int $id
 * @property int $education_institution_list_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereEducationInstitutionListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereUserId($value)
 * @mixin Eloquent
 */
class Occupation extends Model
{
    use SlugTrait;


    protected $table = 'occupations';

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        //TODO: 'status' -> need enum
    ];

    protected static string $fieldForCreateSlug = 'name';
}
