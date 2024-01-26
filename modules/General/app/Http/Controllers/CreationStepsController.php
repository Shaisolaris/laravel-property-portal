<?php

namespace Modules\General\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\General\app\Http\Requests\CreatingStepsRequest;

class CreationStepsController extends Controller
{
    public function create(CreatingStepsRequest $request): \Inertia\Response
    {
        abort_if(($request->route('program') != 'class' || $request->route('program') == 'course') && $request->user() && $request->user()->hasRole(UserRoleEnum::Student()->value), 404);

        return Inertia::render('General::Steps', [
            'program' => $request->route('program')
        ]);
    }
}
