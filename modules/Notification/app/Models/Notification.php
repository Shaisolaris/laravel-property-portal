<?php

namespace Modules\Notification\app\Models;

use Eloquent;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Modules\Notification\Entities\Notification
 *
 * @property-read Model|Eloquent $model
 * @property-read User|null $user
 * @method static Builder|Notification newModelQuery()
 * @method static Builder|Notification newQuery()
 * @method static Builder|Notification query()
 * @mixin Eloquent
 */
class Notification extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'model_id',
        'model_type',
        'text',
        'type',
        'read_at',
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
