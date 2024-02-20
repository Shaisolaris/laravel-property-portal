<?php

namespace Database\Seeders;

use App\Facades\Settings;
use App\Models\AppSetting;
use Illuminate\Database\Seeder;

class AppSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settingValues = [
            Settings::USER_INVITE_LIFETIME  => 5 * 24,
            Settings::PERCENTAGE_PAYMENT_ORGANIZATION  => 8,
        ];

        foreach ($settingValues as $key => $value) {
            $setting = AppSetting::query()->where('key', $key)->first();

            if (!$setting) {
                // Setting does not exists -> create
                AppSetting::query()->create([
                    'key'   => $key,
                    'value' => $value,
                ]);
            }

            // Do not change existing
        }

    }

}
