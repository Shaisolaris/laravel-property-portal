<?php

namespace Modules\General\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use App\Traits\HasSlugTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\General\database\factories\EiSectionFactory;
use Modules\General\app\Traits\Relationships\EiSectionRelationshipsTrait;

/**
 * Modules\General\app\Models\EISection
 *
 * @property int $id
 * @property string $uuid
 * @property string $slug
 * @property string $name
 * @property string $model_type
 * @property int $model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, EiSectionLecture> $lectures
 * @property-read int|null $lectures_count
 * @property-read Model|Eloquent $model
 * @method static EiSectionFactory factory($count = null, $state = [])
 * @method static Builder|EiSection newModelQuery()
 * @method static Builder|EiSection newQuery()
 * @method static Builder|EiSection query()
 * @method static Builder|EiSection whereCreatedAt($value)
 * @method static Builder|EiSection whereId($value)
 * @method static Builder|EiSection whereModelId($value)
 * @method static Builder|EiSection whereModelType($value)
 * @method static Builder|EiSection whereName($value)
 * @method static Builder|EiSection whereSlug($value)
 * @method static Builder|EiSection whereUpdatedAt($value)
 * @method static Builder|EiSection whereUuid($value)
 * @mixin Eloquent
 */
class EiSection extends Model
{
    use HasFactory;
    use HasSlugTrait;
    use HasUuidTrait;
    use EiSectionRelationshipsTrait;


    protected $table = 'ei_sections';

    protected $fillable = [
        'uuid',
        'slug',
        'name',
        'model_id',
        'model_type',
    ];

    protected static function newFactory(): EiSectionFactory
    {
        return EiSectionFactory::new();
    }
}
