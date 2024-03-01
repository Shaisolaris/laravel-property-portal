<?php

namespace App\Processor\Resources;

use Modules\General\app\Services\DashboardService;
use Modules\Schedule\app\Http\Resources\ScheduleResource as Resource;
use Modules\School\app\Http\Resources\EiClassSelectResource;

class ScheduleResource
{
    protected mixed $user;

    protected DashboardService $service;


    public function __construct()
    {
        $this->service = app(DashboardService::class);
        $this->user = auth()->user();
    }

    public function instructor(): array
    {
        return [
            'events' => $this->service->getEvents($this->user),
            'classes' => EiClassSelectResource::collection($this->user->myClasses),
        ];
    }

    public function student(): array
    {
        return [
            'events' => Resource::collection($this->service->getEvents($this->user)),
        ];
    }
}
