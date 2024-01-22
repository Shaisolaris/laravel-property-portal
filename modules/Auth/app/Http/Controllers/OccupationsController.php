<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Enums\User\UserTeachingLevel;
use App\Http\Controllers\Controller;
use App\Models\Occupation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\Auth\app\Http\Requests\OccupationRequest;

class OccupationsController extends Controller
{
    public function index(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        if($request->user()->isOccupations()) {
            return to_route('registration.profile-avatar.index');
        }

        return Inertia::render('Auth::steps/Occupation', [
            'occupations' => Occupation::pluck('name', 'id'),
            'experience_levels' => UserTeachingLevel::toArray(),
        ]);
    }

    public function store(OccupationRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $request->user()->occupations()->attach(collect($data['occupations'])->pluck('id'));
        $request->user()->update('teaching_level', $data['experience_level']);

        return response()->json(true);
    }
}
