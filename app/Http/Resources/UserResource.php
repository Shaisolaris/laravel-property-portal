<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Resources\MediaResource;
use Modules\Notification\Http\Resources\NotificationResource;

/** @mixin User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'full_name' => $this->full_name,
            'avatar' => $this->profile_photo_url,

            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'role' => $this->whenLoaded('roles', function () {
                return new UserRoleResource($this->roles()->with('permissions')->first());
            }),
        ];
    }
}
