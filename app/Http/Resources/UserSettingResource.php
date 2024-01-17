<?php

namespace App\Http\Resources;

use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin UserSetting */
class UserSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'notification' => $this->notification_settings,
        ];
    }
}
