<?php

namespace Modules\School\app\Models;

use Eloquent;
use App\Models\User;
use App\Traits\HasUuidTrait;
use App\Traits\HasSlugTrait;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Models\EiSection;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\School\database\factories\ClassSubjectFactory;
use Modules\School\app\Traits\Relationships\ClassSubjectRelationshipsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * Modules\School\app\Models\EiClassSubject
 *
 * @property int $id
 * @property string $uuid
 * @property int $class_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string $language
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read EiClass $eiClass
 * @property-read Collection<int, User> $instructors
 * @property-read int|null $instructors_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, Schedule> $schedule
 * @property-read int|null $schedule_count
 * @property-read Collection<int, EiSection> $sections
 * @property-read int|null $sections_count
 * @method static \Modules\School\database\factories\ClassSubjectFactory factory($count = null, $state = [])
 * @method static Builder|EiClassSubject newModelQuery()
 * @method static Builder|EiClassSubject newQuery()
 * @method static Builder|EiClassSubject query()
 * @method static Builder|EiClassSubject whereClassId($value)
 * @method static Builder|EiClassSubject whereCreatedAt($value)
 * @method static Builder|EiClassSubject whereDescription($value)
 * @method static Builder|EiClassSubject whereId($value)
 * @method static Builder|EiClassSubject whereLanguage($value)
 * @method static Builder|EiClassSubject whereName($value)
 * @method static Builder|EiClassSubject whereSlug($value)
 * @method static Builder|EiClassSubject whereUpdatedAt($value)
 * @method static Builder|EiClassSubject whereUuid($value)
 * @mixin Eloquent
 */
class EiClassSubject extends Model implements HasMedia
{
    use HasFactory;
    use HasSlugTrait;
    use HasUuidTrait;
    use HasFileUploads;
    use ClassSubjectRelationshipsTrait;


    protected $table = 'ei_class_subjects';

    protected $fillable = [
        'name',
        'slug',
        'class_id',
        'language',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $with = ['media'];


    protected static function newFactory(): ClassSubjectFactory
    {
        return ClassSubjectFactory::new();
    }
}
