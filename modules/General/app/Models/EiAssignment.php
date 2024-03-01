<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Traits\HasSlugTrait;
use App\Traits\HasUuidTrait;
use App\Traits\HasFileUploads;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * Modules\General\app\Models\EiAssignment
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $slug
 * @property string $language
 * @property string $total_score
 * @property string $passing_score
 * @property string $description
 * @property int|null $lecture_id
 * @property string $start_work_datetime
 * @property string $end_work_datetime
 * @property string $model_type
 * @property int $model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static Builder|EiAssignment newModelQuery()
 * @method static Builder|EiAssignment newQuery()
 * @method static Builder|EiAssignment query()
 * @method static Builder|EiAssignment whereCreatedAt($value)
 * @method static Builder|EiAssignment whereDescription($value)
 * @method static Builder|EiAssignment whereEndWorkDatetime($value)
 * @method static Builder|EiAssignment whereId($value)
 * @method static Builder|EiAssignment whereLanguage($value)
 * @method static Builder|EiAssignment whereLectureId($value)
 * @method static Builder|EiAssignment whereLinksToVideo($value)
 * @method static Builder|EiAssignment whereModelId($value)
 * @method static Builder|EiAssignment whereModelType($value)
 * @method static Builder|EiAssignment whereName($value)
 * @method static Builder|EiAssignment wherePassingScore($value)
 * @method static Builder|EiAssignment whereSlug($value)
 * @method static Builder|EiAssignment whereStartWorkDatetime($value)
 * @method static Builder|EiAssignment whereTotalScore($value)
 * @method static Builder|EiAssignment whereUpdatedAt($value)
 * @method static Builder|EiAssignment whereUuid($value)
 * @mixin Eloquent
 */
class EiAssignment extends Model implements HasMedia
{
    use HasSlugTrait;
    use HasUuidTrait;
    use HasFileUploads;

    protected $table = 'ei_assignments';

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'model_id',
        'language',
        'model_type',
        'total_score',
        'passing_score',
        'description',
        'lecture_id',
        'start_work_datetime',
        'end_work_datetime',
    ];

    protected $casts = [
        'start_work_datetime' => 'datetime',
        'end_work_datetime' => 'datetime',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'id'
        );
    }

    public function homework()
    {
        // TODO::
        if(auth()->user()->isStudent()) {
            return $this->morphOne(StudentHomework::class, 'model')->where('user_id', auth()->id());
        } else {
            return $this->morphOne(StudentHomeworkInstructor::class, 'model')->where('instructor_id', auth()->id());
        }
    }
}
