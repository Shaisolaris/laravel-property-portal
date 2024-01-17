<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Notification\Http\Resources\NotificationResource;

/** @mixin User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'email' => $this->email,
            'avatar' => $this->profile_photo_url,
            'fullName' => $this->fullName(),
            'birthAt' => $this->birth_at?->format('d M, Y'),
            'gender' => $this->gender,
            'timezone' => $this->timezone,
            'bio' => $this->bio,
            'languages' => $this->languages && is_array($this->languages) ? implode(', ', $this->languages) : $this->languages,
            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'role' => $this->whenLoaded('roles', function () {
                return new UserRoleResource($this->roles()->with('permissions')->first());
            }),
            'settings' => $this->whenLoaded('settings', function () {
                return new UserSettingResource($this->whenLoaded('settings')->first());
            }),
        ];
    }
}
