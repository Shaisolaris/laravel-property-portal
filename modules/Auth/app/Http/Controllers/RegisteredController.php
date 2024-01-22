<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationInstitution;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Contracts\Auth\StatefulGuard;
use Modules\Auth\app\Http\Requests\CreateUserRequest;

class RegisteredController extends Controller
{
    /**
     * The guard implementation.
     */
    protected StatefulGuard $guard;

    /**
     * Create a new controller instance.
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function create(): \Inertia\Response|\Inertia\ResponseFactory
    {
        $institutions = EducationInstitution::pluck('type');

        return inertia('Auth::Register', compact('institutions'));
    }

    /**
     * @throws ValidationException
     */
    public function store(CreateUserRequest $request, CreatesNewUsers $creator)
    {
        $data = $request->validated();

        if ($user = $request->checkSecurity()) {

            $creator->recreated($user, $data);

            $this->guard->login($user);
            return response()->json(true);
        }

        if ($user = $creator->create($data)) {

            $this->guard->login($user);

            if ($user->hasVerifiedEmail()) {
                $user->sendSendOtpCodeNotification();
            }
        }

        return response()->json(true);
    }
}
