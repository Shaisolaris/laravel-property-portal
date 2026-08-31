<?php

namespace Modules\Admin\app\Services;

use App\Models\Role;
use App\Models\User;
use App\Facades\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Modules\Admin\app\Events\UserCreatedByAdmin;
use Modules\General\app\Models\EducationInstitution;
use Modules\Admin\app\Http\Requests\User\UserSaveRequest;
use Modules\Admin\app\Http\Requests\User\UserIndexRequest;
use Modules\Admin\app\Notifications\UserSetPasswordLinkNotification;

class UserService
{
    public function getList(UserIndexRequest $request)
    {


        $query = User::query();

        $query->whereDoesntHave('roles', function ($query) {
            /** @var Builder|Role $query */
            $query->where('name', UserRoleEnum::SuperAdmin()->value);
        });

        if($request->search) {
            $query->where(function ($query) use ($request) {
                /** @var Builder $query */
                $query->orWhere('email', 'ilike', "%{$request->search}%");
                $query->orWhere('first_name', 'ilike', "%{$request->search}%");
                $query->orWhere('last_name', 'ilike', "%{$request->search}%");
            });
        }


        return $query->paginate();

    }

    public function getOrganizers()
    {


        /** @var Builder|User $query */
        $query = User::query();


        $query->whereHas('roles', function ($query) {
            /** @var Builder|Role $query */
            $query->where('name', UserRoleEnum::Organizer()->value);
        });

        $query->with('roles');

        return $query->limit(1000)->get();

    }

    public function createUser(UserSaveRequest $request)
    {
        /** @var User $user */
        $user = User::create(array_merge(
            $request->validated(),
            [
                'password' => '',
                'status' => UserStatusEnum::Pending()->value,
            ]
        ));


        if($request->role_name) {
            $user->syncRoles([$request->role_name]);
        }

        UserCreatedByAdmin::dispatch($user);

        return $user;
    }

    public function updateUser(User $user, UserSaveRequest $request)
    {

        $user->fill($request->validated());

        if(!$user->password) {
            $user->password = '';
        }

        $user->save();

        if($request->role_name) {
            $user->syncRoles([$request->role_name]);
        }
    }

    public function assignToInstitution(User $user, string|EducationInstitution $institution): void
    {

        if(is_string($institution)) {
            $institution = EducationInstitution::query()->where('uuid', $institution)->first();
        }

        if($user->hasRole([UserRoleEnum::Instructor()->value, UserRoleEnum::Student()->value])) {
            // Students ans instructors can be assigned only to one institution
            $user->institutions()->detach();
        }

        $user->institutions()->attach($institution);
    }


    public function ban(User $user)
    {
        $user->status = UserStatusEnum::Ban()->value;
        $user->save();
    }

    public function unban(User $user)
    {
        $user->status = UserStatusEnum::Active()->value;
        $user->save();
    }

    public function sendSetPasswordLink(User $user, bool $onCreate = false): bool
    {
        if(!(!$user->password && ($user->password_set_token || $onCreate))) {
            // Password already set OR user is not created by admin
            return false;
        }

        $this->setPasswordToken($user);

        $user->notify(new UserSetPasswordLinkNotification());

        return true;
    }

    protected function setPasswordToken(User $user): void
    {
        $user->password_set_token = Str::random(60);
        $user->password_set_until = Carbon::now()->addHours(Settings::userInviteLifetime());

        $user->save();
    }
}
