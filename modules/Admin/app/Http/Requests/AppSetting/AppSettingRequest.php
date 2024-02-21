<?php

namespace Modules\Admin\app\Http\Requests\AppSetting;

use App\Facades\Settings;
use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read integer $user_invite_lifetime
 * @property-read integer $percentage_payment_organization
 *
 */
class AppSettingRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            Settings::USER_INVITE_LIFETIME            => ['required', 'integer', 'min:48'],
            Settings::PERCENTAGE_PAYMENT_ORGANIZATION => ['required', 'integer', 'max:100'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
