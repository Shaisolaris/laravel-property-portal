<?php

namespace App\Models;

use Eloquent;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * App\Models\UserDetail
 *
 * @property int $id
 * @property int $user_id
 * @property string $account_type
 * @property string $account_holder_name
 * @property string $account_number
 * @property string $extra_information
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereAccountHolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereExtraInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereUserId($value)
 * @mixin Eloquent
 */
class UserDetail extends Model implements HasMedia
{
    use HasFileUploads;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'account_type',
        'account_number',
        'extra_information',
        'account_holder_name',
    ];
}
