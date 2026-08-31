<?php

namespace Modules\General\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\General\app\Http\Requests\CreatingStepsRequest;
use Modules\General\app\Processor\Processor;

class CreationStepsController extends Controller
{
    public function create(Request $request): \Inertia\Response
    {
        abort_if($request->route('program') != 'subject' && $request->route('program') != 'course' || $request->user()->hasRole(UserRoleEnum::Student()->value), 404);

        return Processor::build($request)->render('forms');
    }

    public function store(CreatingStepsRequest $request)
    {
        $program = $request->get('program');

        if(!Processor::build($request)->edit('forms')) {
            return to_route('general.institution.add-step', compact('program'))->error(__('success.error_step'));
        } else {
            return to_route('general.dashboard')->success(__('success.create_course'));
        }
    }

    public function validateData(CreatingStepsRequest $request)
    {
        return to_route('general.institution.add-step', ['program' => $request->get('program')])->success(__('success.update_step'));
    }
}
