<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Enums\User\UserGenderEnum;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserRoleResource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Modules\Admin\app\Http\Requests\User\UserIndexRequest;
use Modules\Admin\app\Http\Requests\User\UserSaveRequest;
use Modules\Admin\app\Http\Resources\EducationInstitutionResource;
use Modules\Admin\app\Http\Resources\UserResource;
use Modules\Admin\app\Services\EducationInstitutionService;
use Modules\Admin\app\Services\UserService;

class UserController extends Controller
{
    public function __construct(protected UserService $userService, protected EducationInstitutionService $institutionService)
    {
        parent::__construct();
    }

    public function index(UserIndexRequest $request)
    {


        return Inertia::render('Admin::Users/Index', [
            'users'   => UserResource::collection($this->userService->getList($request)),
            'filters' => $request->validated(),
        ]);
    }

    public function edit(Request $request, User $user)
    {

        return $this->userEditFormResponse($user);
    }

    public function create(Request $request)
    {

        return $this->userEditFormResponse();
    }

    public function store(UserSaveRequest $request)
    {

        $user = DB::transaction(function () use ($request) {

            $user = $this->userService->createUser($request);

            if ($request->institution_uuid) {
                $this->userService->assignToInstitution($user, $request->institution_uuid);
            }

            return $user;
        });

        return Redirect::route('admin.user.edit', ['user' => $user])
            ->success('admin.page.user.create-success');
    }

    public function update(UserSaveRequest $request, ?User $user)
    {

        DB::transaction(function () use ($user, $request) {

            $this->userService->updateUser($user, $request);

            if ($request->institution_uuid) {
                $this->userService->assignToInstitution($user, $request->institution_uuid);
            }

        });

        return Redirect::route('admin.user.edit', ['user' => $user])
            ->success('admin.page.user.save-success');
    }

    public function ban(User $user)
    {
        $this->userService->ban($user);

        return Redirect::back()->success('admin.page.user.ban-success');
    }

    public function unban(User $user)
    {
        $this->userService->unban($user);

        return Redirect::back()->success('admin.page.user.unban-success');
    }

    public function resendSetPasswordLink(User $user)
    {
        $result = $this->userService->sendSetPasswordLink($user);

        return Redirect::back()->success($result ? 'admin.page.user.send-password-link-success' : 'admin.page.user.send-password-link-fail');
    }

    /**
     * @param User|null $user
     *
     * @return \Inertia\Response
     */
    protected function userEditFormResponse(?User $user = null): \Inertia\Response
    {
        $user?->load(['roles']);

        return Inertia::render('Admin::Users/Edit', [
            'user'         => $user ? UserResource::make($user) : null,
            'genders'      => UserGenderEnum::getLabelsValues(),
            'statuses'     => UserStatusEnum::getLabelsValues(),
            'roles'        => UserRoleResource::collection(
                Role::query()
                    ->whereNotIn('name', [UserRoleEnum::SuperAdmin()->value])
                    ->get()
            ),
            'institutions' => EducationInstitutionResource::collection($this->institutionService->getSelectList()),
        ]);
    }
}
