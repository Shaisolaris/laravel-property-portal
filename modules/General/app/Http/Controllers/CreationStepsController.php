<?php

namespace Modules\General\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\General\app\Http\Requests\CreatingStepsRequest;

class CreationStepsController extends Controller
{
    public function create(Request $request): \Inertia\Response
    {
        abort_if($request->route('program') != 'classes' && $request->route('program') != 'course' || $request->user()->hasRole(UserRoleEnum::Student()->value), 404);

        return Inertia::render('General::InstitutionCreatingSteps/Forms', [
            'program' => $request->route('program'),
        ]);
    }

    public function store(CreatingStepsRequest $request)
    {
        dd($request->all());
    }
}
