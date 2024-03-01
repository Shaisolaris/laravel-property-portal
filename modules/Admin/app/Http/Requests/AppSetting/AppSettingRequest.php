<?php

namespace Modules\Admin\app\Http\Requests\AppSetting;

use App\Facades\Settings;
use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read integer $user_invite_lifetime
 * @property-read integer $percentage_payment_organization
 * @property-read integer $free_courses
 * @property-read integer $number_payment_credential
 *
 */
class AppSettingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            Settings::USER_INVITE_LIFETIME => ['required', 'integer', 'min:48'],
            Settings::PERCENTAGE_PAYMENT_ORGANIZATION => ['required', 'integer', 'max:100'],
            Settings::NUMBER_PAYMENT_CREDENTIAL => ['required', 'integer'],
            Settings::FREE_COURSES => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
