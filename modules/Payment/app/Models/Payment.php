<?php

namespace Modules\Payment\app\Models;

use Eloquent;
use App\Models\User;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Models\EducationInstitution;
use Modules\Payment\app\Traits\Models\Relationships\PaymentRelationshipsTrait;

/**
 * Modules\Payment\app\Models\Payment
 *
 * @property int $id
 * @property string $uuid
 * @property int $ei_id
 * @property int $student_id
 * @property int $instructor_id
 * @property int $organizer_id
 * @property int $transaction_id
 * @property int $charge_id
 * @property string $model_type
 * @property int $model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Charge|null $charge
 * @property-read EducationInstitution|null $institution
 * @property-read User|null $instructor
 * @property-read Model|Eloquent $model
 * @property-read User|null $organizer
 * @property-read User|null $student
 * @property-read Transaction|null $transaction
 * @method static Builder|Payment newModelQuery()
 * @method static Builder|Payment newQuery()
 * @method static Builder|Payment query()
 * @method static Builder|Payment whereChargeId($value)
 * @method static Builder|Payment whereCreatedAt($value)
 * @method static Builder|Payment whereEiId($value)
 * @method static Builder|Payment whereId($value)
 * @method static Builder|Payment whereInstructorId($value)
 * @method static Builder|Payment whereModelId($value)
 * @method static Builder|Payment whereModelType($value)
 * @method static Builder|Payment whereOrganizerId($value)
 * @method static Builder|Payment whereStudentId($value)
 * @method static Builder|Payment whereTransactionId($value)
 * @method static Builder|Payment whereUpdatedAt($value)
 * @method static Builder|Payment whereUuid($value)
 * @mixin Eloquent
 */
class Payment extends Model
{
    use HasUuidTrait;
    use PaymentRelationshipsTrait;


    protected $table = 'payments';

    protected $fillable = [
        'ei_id',
        'model_id',
        'charge_id',
        'model_type',
        'student_id',
        'organizer_id',
        'instructor_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
