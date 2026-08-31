<?php

namespace Modules\School\app\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\School\app\Models\EiClassSubjectUser
 *
 * @property int $id
 * @property int $subject_id
 * @property int $user_id
 * @method static Builder|EiClassSubjectUser newModelQuery()
 * @method static Builder|EiClassSubjectUser newQuery()
 * @method static Builder|EiClassSubjectUser query()
 * @method static Builder|EiClassSubjectUser whereId($value)
 * @method static Builder|EiClassSubjectUser whereSubjectId($value)
 * @method static Builder|EiClassSubjectUser whereUserId($value)
 * @mixin Eloquent
 */
class EiClassSubjectUser extends Model
{
    protected $table = 'ei_class_subject_users';

    protected $fillable = [
        'user_id',
        'subject_id',
    ];

    public $timestamps = false;
}
