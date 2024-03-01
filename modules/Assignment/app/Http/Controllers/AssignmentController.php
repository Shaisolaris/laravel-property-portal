<?php

namespace Modules\Assignment\app\Http\Controllers;

use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Processor\Processor;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Modules\Assignment\app\Http\Requests\StudentHomeworkRequest;
use Modules\Assignment\app\Http\Resources\EiAssignmentResource;
use Modules\Assignment\app\Services\AssignmentsService;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;
use Modules\General\app\Models\EiAssignment;

class AssignmentController extends Controller
{
    public function index(Request $request): Response
    {
        return Processor::build($request)->render('assignment');
    }

    public function show(Request $request): Response
    {
        $assignment = EiAssignment::whereUuid($request->route('assignment'))->first();

        abort_if(!$assignment, 404);

        $accepted = $request->user()->assignments()->whereNotIn('uuid', [$assignment->uuid])->get(); // TODO:

        return Inertia::render('Assignment::Show', [
            'assignment' => EiAssignmentResource::make($assignment),
            'statuses' => [
                StudentHomeworkStatusEnum::Accepted()->value => StudentHomeworkStatusEnum::Accepted()->label, // TODO:
                StudentHomeworkStatusEnum::NotAccepted()->value => StudentHomeworkStatusEnum::NotAccepted()->label // TODO:
            ],
            'accepted' => EiAssignmentResource::collection($accepted) // TODO::
        ]);
    }

    public function handler(StudentHomeworkRequest $request)
    {
        // TODO:
        // abort_if(!$request->user()->hasRole(UserRoleEnum::Student()->value), 403);

        try {
            $service = new AssignmentsService($request);

            if(!$service->status) {
                throw new Exception($service->message);
            }

            $route = to_route('institution.assignment.show', ['assignment' => $request->assignment_uuid]);

            if($service->status) {
                return $route->success(__('success.data_is_updated'));
            } else {
                return $route->success(__('success.error_system'));
            }

        } catch (\Exception $exception) {
            return to_route('general.dashboard')->error($exception->getMessage());
        }
    }
}
