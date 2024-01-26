<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\General\app\Http\Resources\UserSettingResource;
use Modules\Notification\Http\Resources\NotificationResource;

/** @mixin User
 * @property mixed $fullName
 * @property bool $isOrganizer
 * @property bool $isInstructor
 * @property bool $isStudent
 */
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
            'fullName' => $this->fullName,
            'birthAt' => $this->birth_at?->format('d M, Y'),
            'gender' => $this->gender,
            'timezone' => $this->timezone,
            'bio' => $this->bio,
            'balance' => Number::format($this->balance),
            'isOrganizer' => $this->isOrganizer,
            'isInstructor' => $this->isInstructor,
            'isStudent' => $this->isStudent,
            'languages' => $this->languages && is_array($this->languages) ? implode(', ', $this->languages) : $this->languages,
            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'settings' => UserSettingResource::make($this->whenLoaded('settings')),
            'detail' => UserDetail::make($this->whenLoaded('detail')),
            'role' => $this->whenLoaded('roles', function () {
                return UserRoleResource::make($this->roles()->with('permissions')->first());
            }),
        ];
    }
}
