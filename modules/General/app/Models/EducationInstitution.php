<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Database\Factories\EducationInstitutionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\Models\Scope\EducationInstitutionScopeTrait;
use App\Enums\EducationInstitutions\EducationInstitutionStatusEnum;
use App\Traits\Models\Relationships\EducationInstitutionRelationshipsTrait;

/**
 * App\Models\EducationInstitution
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $name
 * @property string|null $description
 * @property string|null $slug
 * @property string $status
 * @property int $education_institution_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, EducationInstitutionCourse> $courses
 * @property-read int|null $courses_count
 * @property-read EducationInstitutionType $institutionType
 * @property-read Collection<int, User> $peoples
 * @property-read Collection<int, User> $organizers
 * @property-read int|null $peoples_count
 * @method static Builder|EducationInstitution available()
 * @method static EducationInstitutionFactory factory($count = null, $state = [])
 * @method static Builder|EducationInstitution newModelQuery()
 * @method static Builder|EducationInstitution newQuery()
 * @method static Builder|EducationInstitution query()
 * @method static Builder|EducationInstitution whereCreatedAt($value)
 * @method static Builder|EducationInstitution whereDescription($value)
 * @method static Builder|EducationInstitution whereEducationInstitutionTypeId($value)
 * @method static Builder|EducationInstitution whereId($value)
 * @method static Builder|EducationInstitution whereName($value)
 * @method static Builder|EducationInstitution whereSlug($value)
 * @method static Builder|EducationInstitution whereStatus($value)
 * @method static Builder|EducationInstitution whereUpdatedAt($value)
 * @method static Builder|EducationInstitution whereUuid($value)
 * @mixin Eloquent
 */
class EducationInstitution extends Model
{
    use HasFactory;
    use HasUuidTrait;
    use EducationInstitutionScopeTrait;
    use EducationInstitutionRelationshipsTrait;


    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => EducationInstitutionStatusEnum::class
    ];


    protected static function newFactory(): EducationInstitutionFactory
    {
        return EducationInstitutionFactory::new();
    }
}
