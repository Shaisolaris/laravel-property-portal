<?php

namespace Modules\School\app\Models;

use Eloquent;
use App\Models\User;
use Spatie\Enum\Enum;
use App\Enums\LanguageEnum;
use App\Traits\HasUuidTrait;
use App\Traits\HasSlugTrait;
use App\Models\EntityReview;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\Schedule\app\Models\Schedule;
use Illuminate\Database\Eloquent\Collection;
use Modules\School\app\Enums\EiClassStatusEnum;
use Modules\General\app\Models\EiSectionLecture;
use Modules\General\app\Models\EducationInstitution;
use Modules\School\database\factories\EiClassFactory;
use Modules\Payment\app\Traits\Models\HasPaymentTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\School\app\Traits\Attributes\EIClassAttributesTrait;
use Modules\School\app\Traits\Relationships\EducationInstitutionClassRelationshipsTrait;

/**
 * Modules\School\app\Models\EiClass
 *
 * @property int $id
 * @property string $uuid
 * @property int $ei_id
 * @property string $name
 * @property string $slug
 * @property Enum $status
 * @property string $price
 * @property string $hourly_rate
 * @property int $capacity
 * @property int $duration_lesson
 * @property int $gradation_age_from
 * @property int $gradation_age_to
 * @property Enum $language
 * @property string $description
 * @property Carbon $start_date_at
 * @property Carbon $end_date_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Schedule> $events
 * @property-read int|null $events_count
 * @property-read EducationInstitution $institution
 * @property-read Collection<int, EiSectionLecture> $lectures
 * @property-read int|null $lectures_count
 * @property-read Collection<int, EntityReview> $reviews
 * @property-read int|null $reviews_count
 * @property-read Collection<int, EiClassSubject> $subjects
 * @property-read int|null $subjects_count
 * @property-read Collection<int, User> $users
 * @property-read int|null $users_count
 * @method static EiClassFactory factory($count = null, $state = [])
 * @method static Builder|EiClass newModelQuery()
 * @method static Builder|EiClass newQuery()
 * @method static Builder|EiClass query()
 * @method static Builder|EiClass whereCapacity($value)
 * @method static Builder|EiClass whereCreatedAt($value)
 * @method static Builder|EiClass whereDescription($value)
 * @method static Builder|EiClass whereDurationLesson($value)
 * @method static Builder|EiClass whereEiId($value)
 * @method static Builder|EiClass whereEndDateAt($value)
 * @method static Builder|EiClass whereGradationAgeFrom($value)
 * @method static Builder|EiClass whereGradationAgeTo($value)
 * @method static Builder|EiClass whereHourlyRate($value)
 * @method static Builder|EiClass whereId($value)
 * @method static Builder|EiClass whereLanguage($value)
 * @method static Builder|EiClass whereName($value)
 * @method static Builder|EiClass wherePrice($value)
 * @method static Builder|EiClass whereSlug($value)
 * @method static Builder|EiClass whereStartDateAt($value)
 * @method static Builder|EiClass whereStatus($value)
 * @method static Builder|EiClass whereUpdatedAt($value)
 * @method static Builder|EiClass whereUuid($value)
 * @mixin Eloquent
 */
class EiClass extends Model
{
    use HasFactory;
    use HasSlugTrait;
    use HasUuidTrait;
    use HasPaymentTrait;
    use EIClassAttributesTrait;
    use EducationInstitutionClassRelationshipsTrait;


    protected $table = 'ei_classes';

    protected $fillable = [
        'name',
        'slug',
        'ei_id',
        'price',
        'status',
        'capacity',
        'language',
        'hourly_rate',
        'description',
        'end_date_at',
        'start_date_at',
        'duration_lesson',
        'gradation_age_to',
        'gradation_age_from',
    ];

    protected $casts = [
        'end_date_at' => 'date',
        'start_date_at' => 'date',
        'capacity' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'duration_lesson' => 'integer',
        'gradation_age_to' => 'integer',
        'gradation_age_from' => 'integer',
        'price' => 'decimal:2',
        'hourly_rate' => 'decimal:2',
        'language' => LanguageEnum::class,
        'status' => EiClassStatusEnum::class,
    ];


    protected static function newFactory(): EiClassFactory
    {
        return EiClassFactory::new();
    }
}
