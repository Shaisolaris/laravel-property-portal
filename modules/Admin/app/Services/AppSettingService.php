<?php

namespace Modules\Admin\app\Services;

use App\Facades\Settings;
use App\Models\AppSetting;
use Illuminate\Support\Collection;
use Modules\Admin\app\Http\Requests\AppSetting\AppSettingRequest;

class AppSettingService
{
    protected array $editableSettings = [
        Settings::USER_INVITE_LIFETIME,
        Settings::PERCENTAGE_PAYMENT_ORGANIZATION,
    ];

    public function getValues(): Collection
    {

        return AppSetting::query()
            ->whereIn('key', $this->editableSettings)
            ->get()
            ->pluck('value', 'key')
        ;
    }

    public function updateSettings(AppSettingRequest $request): void
    {

        $data = $request->validated();

        $settings = AppSetting::all()->keyBy('key');

        foreach ($data as $key => $value) {
            /** @var AppSetting $setting */
            $setting = $settings->get($key, null);
            if(!$setting) {
                continue;
            }

            $setting->update(['value' => $value]);
        }

    }



}
