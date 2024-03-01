<?php

namespace App\Models;

use Eloquent;
use App\Facades\Settings;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\AppSetting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|AppSetting newModelQuery()
 * @method static Builder|AppSetting newQuery()
 * @method static Builder|AppSetting query()
 * @method static Builder|AppSetting whereCreatedAt($value)
 * @method static Builder|AppSetting whereId($value)
 * @method static Builder|AppSetting whereKey($value)
 * @method static Builder|AppSetting whereUpdatedAt($value)
 * @method static Builder|AppSetting whereValue($value)
 * @mixin Eloquent
 */
class AppSetting extends Model
{
    protected $table = 'app_settings';

    protected $fillable = [
        'key',
        'value',
    ];

    protected $casts = [
        'value' => 'string',
    ];

    protected array $valueCasts = [
        Settings::USER_INVITE_LIFETIME => 'integer',
        Settings::PERCENTAGE_PAYMENT_ORGANIZATION => 'float',
        Settings::FREE_COURSES => 'integer',
        Settings::NUMBER_PAYMENT_CREDENTIAL => 'integer',
    ];


    protected function getCastType($key)
    {
        if($key != 'value') {
            return parent::getCastType($key);
        }

        return $this->valueCasts[$this->key] ?? parent::getCastType($key);
    }
}
