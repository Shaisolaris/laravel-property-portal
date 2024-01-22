<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\Auth\app\Http\Requests\UserAvatarRequest;

class UploadProfileAvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        if ($request->user()->isUserHaveAvatarBio()) {
            return to_route('registration.user-detail.index');
        }

        return Inertia::render('Auth::steps/ProfileAvatar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAvatarRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $request->user()->updateProfilePhoto($request->file('avatar'));
        $request->user()->setAttribute('bio', $data['bio']); // TODO: Was happened, when I try used the method update(), I want to string but method required to array

        $request->user()->push();


        return response()->json(true);
    }
}
