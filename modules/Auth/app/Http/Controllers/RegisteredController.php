<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Validation\ValidationException;
use Modules\General\app\Models\EducationInstitution;
use Modules\Auth\app\Http\Requests\CreateUserRequest;
use Modules\General\app\Http\Resources\EducationInstitutionResource;

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
        $institutions = EducationInstitutionResource::collection(EducationInstitution::available()->limit(100)->get());
        $countries = CountryResource::collection(Country::orderBy('name')->get());

        return inertia('Auth::Register', [
            'institutions' => $institutions,
            'countries' => $countries,
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function store(CreateUserRequest $request, CreatesNewUsers $creator)
    {
        $data = $request->validated();

        if ($user = $request->checkSecurity()) {

            $creator->continue($user, $data);

            $this->guard->login($user);

            return response()->json(true);
        }

        if ($user = $creator->create($data)) {

            $this->guard->login($user);

            if (!$user->hasVerifiedEmail()) {
                $user->sendSendOtpCodeNotification();
            }
        }

        return response()->json(true);
    }
}
