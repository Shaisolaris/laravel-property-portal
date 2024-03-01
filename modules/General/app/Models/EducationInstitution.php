<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Models\User;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Modules\School\app\Models\EiClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\Payment\app\Models\Transaction;
use Illuminate\Database\Eloquent\Collection;
use App\Enums\EducationInstitutions\EiStatusEnum;
use Database\Factories\EducationInstitutionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Traits\Models\Relationships\EiRelationshipsTrait;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use App\Traits\Models\Scope\EducationInstitutionScopeTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * Modules\General\app\Models\EducationInstitution
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $name
 * @property string|null $description
 * @property string|null $slug
 * @property Enum $status
 * @property int $education_institution_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, User> $activeUsers
 * @property-read int|null $active_users_count
 * @property-read Collection<int, EiClass> $classes
 * @property-read int|null $classes_count
 * @property-read Collection<int, EducationInstitutionCourse> $courses
 * @property-read int|null $courses_count
 * @property-read EducationInstitutionType $institutionType
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, User> $organizers
 * @property-read int|null $organizers_count
 * @property-read Collection<int, Transaction> $transactions
 * @property-read int|null $transactions_count
 * @property-read Collection<int, User> $users
 * @property-read int|null $users_count
 * @method static Builder|EducationInstitution available()
 * @method static Builder|EducationInstitution availableInstitutionType()
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
class EducationInstitution extends Model implements HasMedia
{
    use HasFactory;
    use HasUuidTrait;
    use HasFileUploads;
    use EducationInstitutionScopeTrait;
    use EiRelationshipsTrait;


    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => EiStatusEnum::class
    ];


    protected static function newFactory(): EducationInstitutionFactory
    {
        return EducationInstitutionFactory::new();
    }
}
