<?php

namespace App\Models;

use Eloquent;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * App\Models\UserDetail
 *
 * @property int $id
 * @property int $user_id
 * @property string $extra_information
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static Builder|UserDetail newModelQuery()
 * @method static Builder|UserDetail newQuery()
 * @method static Builder|UserDetail query()
 * @method static Builder|UserDetail whereAccountHolderName($value)
 * @method static Builder|UserDetail whereAccountNumber($value)
 * @method static Builder|UserDetail whereAccountType($value)
 * @method static Builder|UserDetail whereCreatedAt($value)
 * @method static Builder|UserDetail whereExtraInformation($value)
 * @method static Builder|UserDetail whereId($value)
 * @method static Builder|UserDetail whereUpdatedAt($value)
 * @method static Builder|UserDetail whereUserId($value)
 * @mixin Eloquent
 */
class UserDetail extends Model implements HasMedia
{
    use HasFileUploads;


    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'extra_information',
    ];

    protected $with = ['media'];
}
