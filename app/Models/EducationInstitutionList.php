<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EducationsInstitutionUserFactory;
use App\Traits\Models\Scope\EducationInstitutionListScopeTrait;
use App\Traits\Models\Relationships\EducationInstitutionListRelationshipsTrait;

/**
 * App\Models\EducationInstitutionList
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $name
 * @property string|null $description
 * @property string|null $slug
 * @property string $status
 * @property int $education_institution_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read EducationInstitution $institution
 * @property-read Collection<int, User> $peoples
 * @property-read int|null $peoples_count
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList available()
 * @method static \Database\Factories\EducationsInstitutionUserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereEducationInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionList whereUuid($value)
 * @mixin Eloquent
 */
class EducationInstitutionList extends Model
{
    use HasFactory;
    use EducationInstitutionListScopeTrait;
    use EducationInstitutionListRelationshipsTrait;


    protected $table = 'education_institution_lists';

    protected $fillable = [
        'name',
        'description',
    ];


    protected static function newFactory(): EducationsInstitutionUserFactory
    {
        return EducationsInstitutionUserFactory::new();
    }
}
