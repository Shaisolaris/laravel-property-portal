<?php

namespace Modules\Academy\app\Models;

use Eloquent;
use App\Models\Tag;
use Spatie\Enum\Enum;
use Spatie\Tags\HasTags;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use App\Traits\HasFileUploads;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Models\EiSection;
use Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Payment\app\Traits\Models\HasPaymentTrait;
use Modules\General\app\Models\EducationInstitutionCategory;
use App\Enums\EducationInstitutions\EducationInstitutionCourseEnum;
use Modules\Academy\database\factories\EducationInstitutionCourseFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use App\Traits\Models\Relationships\EducationInstitutionCourseRelationshipTrait;

/**
 * Modules\Academy\app\Models\EducationInstitutionCourse
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string $language
 * @property Enum $status
 * @property string $description
 * @property string|null $base_duration
 * @property string|null $advance_duration
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $category_id
 * @property string|null $uuid
 * @property-read Collection<int, EducationInstitutionCourseBenefit> $benefits
 * @property-read int|null $benefits_count
 * @property-read EducationInstitutionCategory|null $category
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, EiSection> $sections
 * @property-read int|null $sections_count
 * @property Collection<int, Tag> $tags
 * @property-read int|null $tags_count
 * @method static EducationInstitutionCourseFactory factory($count = null, $state = [])
 * @method static Builder|EducationInstitutionCourse newModelQuery()
 * @method static Builder|EducationInstitutionCourse newQuery()
 * @method static Builder|EducationInstitutionCourse query()
 * @method static Builder|EducationInstitutionCourse whereAdvanceDuration($value)
 * @method static Builder|EducationInstitutionCourse whereBaseDuration($value)
 * @method static Builder|EducationInstitutionCourse whereCategoryId($value)
 * @method static Builder|EducationInstitutionCourse whereCreatedAt($value)
 * @method static Builder|EducationInstitutionCourse whereDescription($value)
 * @method static Builder|EducationInstitutionCourse whereId($value)
 * @method static Builder|EducationInstitutionCourse whereLanguage($value)
 * @method static Builder|EducationInstitutionCourse whereStatus($value)
 * @method static Builder|EducationInstitutionCourse whereTitle($value)
 * @method static Builder|EducationInstitutionCourse whereType($value)
 * @method static Builder|EducationInstitutionCourse whereUpdatedAt($value)
 * @method static Builder|EducationInstitutionCourse whereUuid($value)
 * @method static Builder|EducationInstitutionCourse withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static Builder|EducationInstitutionCourse withAllTagsOfAnyType($tags)
 * @method static Builder|EducationInstitutionCourse withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static Builder|EducationInstitutionCourse withAnyTagsOfAnyType($tags)
 * @method static Builder|EducationInstitutionCourse withoutTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @mixin Eloquent
 */
class EducationInstitutionCourse extends Model implements HasMedia
{
    use HasTags;
    use HasFactory;
    use HasUuidTrait;
    use HasFileUploads;
    use HasPaymentTrait;
    use EducationInstitutionCourseRelationshipTrait;

    protected $fillable = [
        'time',
        'type',
        'title',
        'status',
        'language',
        'description',
        'advance_duration',
        'base_duration',
        'category_id',
    ];

    protected $casts = [
        'status' => EducationInstitutionCourseEnum::class
    ];

    protected $with = ['category'];

    protected static function newFactory(): EducationInstitutionCourseFactory
    {
        return EducationInstitutionCourseFactory::new();
    }
}
