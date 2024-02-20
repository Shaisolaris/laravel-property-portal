<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Inertia\Response;
use Inertia\ResponseFactory;
use Modules\Auth\app\Http\Requests\SetPasswordRequest;
use Modules\Auth\app\Services\PasswordService;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(protected PasswordService $passwordService)
    {
        parent::__construct();
    }



    public function create(Request $request, ?string $uuid, ?string $token): Response|ResponseFactory
    {

        if(!$this->passwordService->canSetPassword($uuid, $token)) {
            abort(404);
        }

        return inertia('Auth::SetPassword', [
            'uuid' => $uuid,
            'token' => $token,

        ]);
    }

    /**
     * @throws ValidationException
     */
    public function store(SetPasswordRequest $request, ?string $uuid, ?string $token)
    {

        $this->passwordService->setPassword($uuid, $token, $request->password);

        return Redirect::route('login')->success('page.set-password.success');

    }
}
