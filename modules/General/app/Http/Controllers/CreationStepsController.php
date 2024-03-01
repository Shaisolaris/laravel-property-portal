<?php

namespace Modules\General\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Processor\Processor;
use Illuminate\Http\Request;
use Modules\General\app\Http\Requests\CreatingStepsRequest;

class CreationStepsController extends Controller
{
    public function create(Request $request): \Inertia\Response
    {
        abort_if($request->route('program') != 'subject' && $request->route('program') != 'course' || $request->user()->hasRole(UserRoleEnum::Student()->value), 404);

        return Processor::build($request)->render('forms');
    }

    public function store(CreatingStepsRequest $request)
    {
        if (!Processor::build($request)->edit('forms')) {
            return Processor::build($request)->toRoute($request->get('program'))->error(__('success.error_system'));
        } else {
            return to_route('general.dashboard')->success(__('success.create_course'));
        }
    }


    public function validateData(CreatingStepsRequest $request)
    {
        return Processor::build($request)->toRoute($request->get('program'))->success(__('success.update_step'));
    }
}
