<?php

namespace Modules\General\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use App\Enums\User\UserRoleEnum;
use App\Http\Controllers\Controller;
use Modules\School\app\Services\MySubjectService;
use Modules\General\app\Services\DashboardService;
use Modules\Schedule\app\Http\Resources\ScheduleResource;
use Modules\School\app\Http\Resources\EiClassSelectResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;
use Modules\General\app\Http\Resources\EducationInstitutionResource;

class GeneralController extends Controller
{
    public function __construct(protected DashboardService $service, protected MySubjectService $mySubjectService)
    {
        parent::__construct();
    }

    public function dashboard(): Response
    {
        switch ($this->user->role_name) {
            case UserRoleEnum::Organizer()->value:
                return Inertia::render('General::'. Str::ucfirst($this->user->role_name) .'/Dashboard', [
                    'institution' => EducationInstitutionResource::make($this->user->institution->institution)
                ]);
            case UserRoleEnum::Instructor()->value:
            case UserRoleEnum::Student()->value:
                return Inertia::render('General::'. Str::ucfirst($this->user->role_name) .'/Dashboard', [
                    'events' => $this->service->getSchedule($this->user),
                    'subjects' => EiClassSubjectResource::collection($this->mySubjectService->getLimitSubjects($this->user))
                ]);
        }
    }


    public function schedule(): Response
    {
        switch ($this->user->role_name) {
            case UserRoleEnum::Instructor()->value:
                return Inertia::render('General::'. Str::ucfirst($this->user->role_name) .'/Schedule', [
                    'events' => $this->service->getEvents($this->user),
                    'classes' => EiClassSelectResource::collection($this->user->myClasses),
                ]);
            case UserRoleEnum::Student()->value:
                return Inertia::render('General::'. Str::ucfirst($this->user->role_name) .'/Schedule', [
                    'events' => ScheduleResource::collection($this->service->getEvents($this->user)),
                ]);
        }
    }


    public function grade(): Response
    {
        return Inertia::render('General::Grade');
    }
}
