<?php

namespace Modules\General\app\Models;

use App\Traits\HasFileUploads;
use App\Traits\HasSlugTrait;
use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\General\app\Traits\Relationships\EISectionRelationshipsTrait;
use Spatie\MediaLibrary\HasMedia;

class EiAssignments extends Model implements HasMedia
{
    use HasFactory;
    use HasSlugTrait;
    use HasUuidTrait;
    use HasFileUploads;
    use EISectionRelationshipsTrait;

    protected $table = 'ei_assignments';

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'language',
        'total_score',
        'passing_score',
        'description',
        'links_to_video',
        'lecture_id',
        'start_work_datetime',
        'end_work_datetime',
        'model_type',
        'model_id',
    ];

    protected $casts = [
        'links_to_video' => 'array'
    ];
}
