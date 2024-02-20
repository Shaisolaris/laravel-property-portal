<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserTeachingLevelEnum;
use App\Http\Controllers\Controller;
use App\Models\Occupation;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\Auth\app\Http\Requests\OccupationRequest;
use Modules\Auth\app\Http\Resources\OccupationsResource;

class OccupationsController extends Controller
{
    public function index(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        $user = $request->user();
        if ($user->hasRole(UserRoleEnum::Instructor()->value)) {

            if ($user->isOccupations()) {
                return to_route('registration.profile-avatar.index');
            }

            return Inertia::render('Auth::steps/Occupation', [
                'occupations' => OccupationsResource::collection(Occupation::available()->get()),
                'experience_levels' => UserTeachingLevelEnum::toArray(),
            ]);

        } else {
            return to_route('registration.profile-avatar.index');
        }
    }

    public function store(OccupationRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        /** @var User $user */
        $user = $request->user();

        $user->occupations()->attach(collect($data['occupations'])->pluck('id'));
        $user->update(['teaching_level' => $data['experience_level']]);

        return response()->json(true);
    }
}
