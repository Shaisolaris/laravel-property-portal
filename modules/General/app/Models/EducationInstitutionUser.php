<?php

namespace Modules\General\app\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EducationInstitutionUserFactory;

/**
 * App\Models\EducationInstitutionUser
 *
 * @property int $id
 * @property int $education_institution_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read EducationInstitution $institution
 * @method static \Database\Factories\EducationInstitutionUserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser whereEducationInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationInstitutionUser whereUserId($value)
 * @mixin Eloquent
 */
class EducationInstitutionUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'education_institution_id',
    ];

    public function institution(): BelongsTo
    {
        return $this->belongsTo(EducationInstitution::class, 'education_institution_id');
    }

    protected static function newFactory(): EducationInstitutionUserFactory
    {
        return EducationInstitutionUserFactory::new();
    }
}
