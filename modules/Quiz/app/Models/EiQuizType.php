<?php

namespace Modules\Quiz\app\Models;

use Eloquent;
use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Quiz\app\Models\EiQuizType
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $value
 * @property array $html
 * @method static Builder|EiQuizType newModelQuery()
 * @method static Builder|EiQuizType newQuery()
 * @method static Builder|EiQuizType query()
 * @method static Builder|EiQuizType whereHtml($value)
 * @method static Builder|EiQuizType whereId($value)
 * @method static Builder|EiQuizType whereName($value)
 * @method static Builder|EiQuizType whereUuid($value)
 * @method static Builder|EiQuizType whereValue($value)
 * @mixin Eloquent
 */
class EiQuizType extends Model
{
    use HasUuidTrait;


    protected $table = 'ei_quiz_types';

    protected $fillable = [
        'name',
        'html',
        'value',
    ];

    protected $casts = [
        'html' => 'array'
    ];

    public $timestamps = false;
}
