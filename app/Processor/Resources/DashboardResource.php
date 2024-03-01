<?php

namespace App\Processor\Resources;

use App\Enums\User\UserRoleEnum;
use App\Http\Resources\UserResource;
use App\Models\User;
use Modules\Assignment\app\Http\Resources\EiAssignmentResource;
use Modules\General\app\Http\Resources\EducationInstitutionResource;
use Modules\General\app\Services\DashboardService;
use Modules\School\app\Http\Resources\EiClassSubjectResource;
use Modules\School\app\Services\MySubjectService;

class DashboardResource
{
    protected mixed $user;

    protected DashboardService $service;

    protected MySubjectService $mySubjectService;

    public function __construct()
    {
        $this->service = app(DashboardService::class);
        $this->mySubjectService = app(MySubjectService::class);

        $this->user = auth()->user();
    }

    public function organizer(): array
    {
        return [
            'institution' => EducationInstitutionResource::make($this->user->institution->institution)
        ];
    }

    public function instructor(): array
    {
        return [
            'events' => $this->service->getSchedule($this->user),
            'subjects' => EiClassSubjectResource::collection($this->mySubjectService->getLimitSubjects($this->user))
        ];
    }

    public function student(): array
    {
        return [
            ...$this->instructor(),
            'mentors' => UserResource::collection(User::onlyOrganisers()->limit(5)->get()), // TODO:: don`t my - for test!!
            'homeworks' => EiAssignmentResource::collection($this->user->assignments()->limit(4)->latest()->get()),
        ];
    }
}
