<?php

namespace Modules\School\app\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\School\database\factories\EiClassUserFactory;

/**
 * Modules\School\app\Models\EiClassUser
 *
 * @property int $id
 * @property int $class_id
 * @property int $user_id
 * @method static Builder|EiClassUser newModelQuery()
 * @method static Builder|EiClassUser newQuery()
 * @method static Builder|EiClassUser query()
 * @method static Builder|EiClassUser whereClassId($value)
 * @method static Builder|EiClassUser whereId($value)
 * @method static Builder|EiClassUser whereUserId($value)
 * @mixin Eloquent
 */
class EiClassUser extends Model
{
    use HasFactory;


    protected $table = 'ei_class_users';

    protected $fillable = [
        'user_id',
        'class_id',
    ];

    public $timestamps = false;


    protected static function newFactory(): EiClassUserFactory
    {
        return EiClassUserFactory::new();
    }
}
