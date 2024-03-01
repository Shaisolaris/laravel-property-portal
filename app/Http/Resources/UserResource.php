<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Enums\User\UserRoleEnum;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User
 * @property mixed $balanceOrganization
 * @property mixed $role_name
 * @property mixed $full_name
 * @property mixed $is_organizer
 * @property mixed $is_student
 * @property mixed $is_instructor
 * @property mixed $is_admin
 */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = [
            'uuid' => $this->uuid,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'avatar' => $this->profile_photo_url,
            'gender' => $this->gender?->value,
            'genderLabel' => $this->gender?->label,
            'timezone' => $this->timezone,
            'bio' => $this->bio,
            'role_name' => $this->role_name,
            'status' => $this->status->label,
            'phone' => $this->phone,
            'balance' => Number::format($this->balanceOrganization),
            'institution_type' => $this->institution_type,
            'institution_name' => $this->institution_name,
            'is_organizer' => $this->isOrganizer(),
            'is_instructor' => $this->isInstructor(),
            'is_student' => $this->isStudent(),
            'is_admin' => $this->isAdmin(),
            'there_are_documents' => $this->thereAreDocument(),
            'birth_at' => $this->birth_at?->format('d M, Y'),
            'languages' => $this->languages && is_array($this->languages) ? implode(', ', $this->languages) : $this->languages,
//            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'settings' => UserSettingResource::make($this->whenLoaded('settings')),
            'detail' => UserDetailResource::make($this->whenLoaded('detail')),
            'role' => $this->whenLoaded('roles', function () {
                return UserRoleResource::make($this->roles()->with('permissions')->first());
            }),
        ];

        if ($this->hasRole(UserRoleEnum::Student()->value) && $this->myClass) {
            $data['myClass'] = [
                'name' => $this->myClass->name,
                'uuid' => $this->myClass->uuid
            ];
        }

        return $data;
    }
}
