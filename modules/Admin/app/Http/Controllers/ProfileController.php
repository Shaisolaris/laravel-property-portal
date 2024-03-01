<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Modules\Admin\app\Http\Requests\Profile\ChangePasswordRequest;
use Modules\Admin\app\Http\Requests\Profile\ProfileSaveRequest;
use Modules\Admin\app\Http\Resources\ProfileResource;
use Modules\Admin\app\Services\ProfileService;

class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService)
    {
        parent::__construct();
    }

    public function edit(Request $request): Response
    {
        return Inertia::render('Admin::Profile/Edit', [
            'profile'   => ProfileResource::make(Auth::user()),
            'countries' => CountryResource::collection(Country::available()->oldest('code')->get()),

        ]);
    }

    public function save(ProfileSaveRequest $request)
    {

        $this->profileService->updateProfile($request);

        return Redirect::back()->success('admin.page.profile.save-success');
    }

    public function showChangePassword(Request $request): Response
    {
        return Inertia::render('Admin::Profile/ChangePassword');
    }

    public function changePassword(ChangePasswordRequest $request)
    {

        $this->profileService->changePassword($request);

        return Redirect::back()->success('admin.page.change-password.save-success');
    }
}
