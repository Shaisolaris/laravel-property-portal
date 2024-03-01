<?php

namespace Modules\School\app\Http\Controllers\Organizer;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Services\EiClassService;
use Modules\Schedule\app\Enums\ScheduleStatusEnum;
use Modules\School\app\Http\Resources\EiClassResource;
use Modules\Schedule\app\Http\Resources\ScheduleResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;
use Modules\School\app\Http\Requests\UpdateOrCreateEiClassRequest;

class EiClassController extends Controller
{
    public function __construct(protected EiClassService $service)
    {
        parent::__construct();

        $this->authorizeResource(EiClass::class, 'eiClass');
    }

    public function index(): Response
    {
        return Inertia::render('School::Organizer/Class/Index', [
            'classes' => EiClassResource::collection($this->service->getClasses($this->user, self::PER_PAGE))
        ]);
    }

    public function schedule(string $role, string $institutionType, EiClass $eiClass): Response
    {
        return Inertia::render('School::Organizer/Class/Tabs/ScheduleTab', [
            'eiClass' => EiClassResource::make($eiClass),
            'subjects' => EiClassSubjectResource::collection($this->service->getClassSubjectsInstructors($eiClass)),
            'events' => ScheduleResource::collection($this->service->getClassEvents($eiClass)),
            'statuses' => ScheduleStatusEnum::getStatuses(),
        ]);
    }

    public function show(string $role, string $institutionType, ?EiClass $eiClass): Response
    {
        return Inertia::render('School::Organizer/Class/Tabs/BasicTab', [
            'eiClass' => EiClassResource::make($eiClass)
        ]);
    }

    public function store(UpdateOrCreateEiClassRequest $request): RedirectResponse
    {
        try {
            $eiClass = $this->service->updateOrCreateClass($request->all());

            return redirect()->to(route('school.class.edit', ['eiClass' => $eiClass->uuid]))->success(__('success.create_class'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }

    public function update(UpdateOrCreateEiClassRequest $request): RedirectResponse
    {
        try {
            $eiClass = $this->service->updateOrCreateClass($request->all());

            return redirect()->to(route('school.class.edit', ['eiClass' => $eiClass->uuid]))->success(__('success.update_class'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }

    public function destroy(string $role, string $institutionType, EiClass $eiClass): RedirectResponse
    {
        try {
            $eiClass->subjects->each->media->each->delete();
            $eiClass->delete();

            return redirect()->to(route('school.class.list'))->success(__('success.delete_class'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
