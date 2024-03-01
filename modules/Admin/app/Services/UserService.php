<?php

namespace Modules\Admin\app\Services;

use App\Models\Role;
use App\Models\User;
use App\Facades\Settings;
use App\Models\UserDetail;
use App\Models\UserPasswordToken;
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

        $query->with([
            'roles',
            'detail' => function ($query) {
            	/** @var Builder|UserDetail $query */
            	$query->withCount('userDocuments');
            }
        ]);

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

        if($request->role_name) {
            $query->whereHas('roles', function ($query) use ($request) {
                /** @var Builder|Role $query */
                $query->where('name', $request->role_name);
            });
        }

        $query->orderBy('id');

        return $query->paginate();
    }

    public function getOrganizers(EducationInstitution $institution = null)
    {
        $institutionOrganizer = $institution?->organizers->first();

        /** @var Builder|User $query */
        $query = User::query();

        $query->onlyOrganisers();

        $query->where(function ($query) use ($institutionOrganizer) {
            /** @var Builder|User $query */
            $query->orWhereDoesntHave('institutions');

            if($institutionOrganizer) {
                $query->orWhere('id', $institutionOrganizer->id);
            }
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

        if($user->hasRole([UserRoleEnum::Organizer()->value])) {
            // Organizer can be assigned only to one institution
            $user->institutions()->detach();

            // Institution can have only one organizer
//            $institution->organizers()->detach();
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
        if(!(!$user->password && (!!$user->passwordToken || $onCreate))) {
            // Password already set OR user is not created by admin
            return false;
        }

        $this->setPasswordToken($user);

        $user->notify(new UserSetPasswordLinkNotification());

        return true;
    }

    protected function setPasswordToken(User $user): UserPasswordToken
    {
        /** @var UserPasswordToken $token */
        $token = $user->passwordToken()->firstOrCreate();

        $token->update([
            'token' => Str::random(60),
            'valid_until' => Carbon::now()->addHours(Settings::userInviteLifetime()),
        ]);

        return $token;
    }

    public function removePasswordToken(User $user): void
    {
        if(!$user->password){
            // If password was not set for some reason - leave password token
            return;
        }

        // Delete all tokens
        $user->passwordToken()->delete();
    }
}
