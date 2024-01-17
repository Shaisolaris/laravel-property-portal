<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Auth\Events\Registered;
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
        return inertia('Auth::Register');
    }

    public function store(CreateUserRequest $request, CreatesNewUsers $creator): \Illuminate\Http\RedirectResponse
    {
        try {
            $data = $request->validated();

            if ($user = $creator->create($data)) {

                $this->guard->login($user);

                if ($user->hasVerifiedOtpCode()) {
                    $user->sendSendOtpCodeNotification();
                }

                return to_route('registration.otp-form');
            }
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect()->back();
    }
}
