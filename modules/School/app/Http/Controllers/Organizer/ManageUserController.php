<?php

namespace Modules\School\app\Http\Controllers\Organizer;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Modules\School\app\Services\EiClassService;

class ManageUserController extends Controller
{
    public function __construct(protected EiClassService $service)
    {
        parent::__construct();
    }


    public function manageStudents(): Response
    {
        return Inertia::render('School::Organizer/ManageUsers/Index', [
            'users' => UserResource::collection($this->service->getUsers($this->user, UserRoleEnum::Student(), self::PER_PAGE)),
            'typeUsers' => 'student'
        ]);
    }

    public function manageInstructors(): Response
    {
        return Inertia::render('School::Organizer/ManageUsers/Index', [
            'users' => UserResource::collection($this->service->getUsers($this->user, UserRoleEnum::Instructor(),self::PER_PAGE)),
            'typeUsers' => 'teacher'
        ]);
    }

    public function studentAction(Request $request)
    {
        try {
            $status = UserStatusEnum::tryFrom($request->get('status'));
            $routePart = $request->get('routePart');

            $params = ['status' => $status->value];

            if ($status->value === UserStatusEnum::Active()->value) {
                $params['sub_status'] = null;
            }

            $request->route('user')->update($params);

            return redirect()->to(route("school.manage-user.$routePart"))->success(__("success.user-$status"));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
