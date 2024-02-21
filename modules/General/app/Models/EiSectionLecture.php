<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Traits\HasSlugTrait;
use App\Traits\HasUuidTrait;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Modules\General\database\factories\EiSectionLectureFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\General\app\Traits\Relationships\EiSectionLectureRelationshipsTrait;

/**
 * Modules\General\app\Models\EiSectionLecture
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $slug
 * @property string $video
 * @property string $description
 * @property string $note
 * @property int $section_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read EiSection|null $section
 * @method static EiSectionLectureFactory factory($count = null, $state = [])
 * @method static Builder|EiSectionLecture newModelQuery()
 * @method static Builder|EiSectionLecture newQuery()
 * @method static Builder|EiSectionLecture query()
 * @method static Builder|EiSectionLecture whereCreatedAt($value)
 * @method static Builder|EiSectionLecture whereDescription($value)
 * @method static Builder|EiSectionLecture whereId($value)
 * @method static Builder|EiSectionLecture whereName($value)
 * @method static Builder|EiSectionLecture whereNote($value)
 * @method static Builder|EiSectionLecture whereSectionId($value)
 * @method static Builder|EiSectionLecture whereSlug($value)
 * @method static Builder|EiSectionLecture whereUpdatedAt($value)
 * @method static Builder|EiSectionLecture whereUuid($value)
 * @method static Builder|EiSectionLecture whereVideo($value)
 * @mixin Eloquent
 */
class EiSectionLecture extends Model implements HasMedia
{
    use HasFactory;
    use HasSlugTrait;
    use HasUuidTrait;
    use HasFileUploads;
    use EiSectionLectureRelationshipsTrait;


    protected $table = 'ei_section_lectures';

    protected $fillable = [
        'uuid',
        'slug',
        'name',
        'note',
        'video',
        'section_id',
        'description',
    ];

    protected static function newFactory(): EiSectionLectureFactory
    {
        return EiSectionLectureFactory::new();
    }
}
