<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $name
 * @property mixed $id
 * @property mixed $guard_name
 * @property mixed $permissions
 */
class UserRoleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'displayName' => Str::title(str_replace('_', ' ', $this->name)),
            'permissions' => $this->getCanAttribute(),
        ];
    }


    private function getCanAttribute(): array
    {
        $permissions = [];

        if ($this->permissions->count() > 0) {
            foreach ($this->permissions as $permission) {
                if (auth()->user()->hasPermissionTo($permission->name)) {
                    $permissions[$permission->name] = true;
                } else {
                    $permissions[$permission->name] = false;
                }
            }
        }

        return $permissions;
    }
}
