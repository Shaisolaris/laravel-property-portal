<?php

namespace Modules\Notification\Entities;

use Eloquent;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Modules\Notification\Entities\Notification
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property int|null $sender_user_id
 * @property string|null $model_type
 * @property int|null $model_id
 * @property string $text
 * @property string $type
 * @property bool $is_seen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Model|Eloquent $morphModel
 * @property-read User|null $user
 * @method static Builder|Notification newModelQuery()
 * @method static Builder|Notification newQuery()
 * @method static Builder|Notification query()
 * @method static Builder|Notification whereCreatedAt($value)
 * @method static Builder|Notification whereId($value)
 * @method static Builder|Notification whereIsSeen($value)
 * @method static Builder|Notification whereModelId($value)
 * @method static Builder|Notification whereModelType($value)
 * @method static Builder|Notification whereSenderUserId($value)
 * @method static Builder|Notification whereText($value)
 * @method static Builder|Notification whereUpdatedAt($value)
 * @method static Builder|Notification whereUserId($value)
 * @method static Builder|Notification whereUuid($value)
 * @mixin Eloquent
 */
class Notification extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'sender_user_id',
        'model_id',
        'model_type',
        'text',
        'type',
        'is_seen',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo(
            '',
            'model_type',
            'model_id',
            'uuid'
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function senderUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_user_id');
    }
}
