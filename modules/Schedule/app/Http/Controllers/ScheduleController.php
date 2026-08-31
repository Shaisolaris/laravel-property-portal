<?php

namespace Modules\Schedule\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\School\app\Models\EiClass;
use Modules\Schedule\app\Models\Schedule;
use Modules\Schedule\app\Services\ScheduleService;
use Modules\Schedule\app\Http\Requests\ClassScheduleCreateRequest;
use Modules\Schedule\app\Http\Requests\ClassScheduleUpdateRequest;

class ScheduleController extends Controller
{
    public function __construct(protected ScheduleService $service)
    {
        parent::__construct();
    }


    public function store(ClassScheduleCreateRequest $request)
    {
        try {
            /** @var EiClass $eiClass */
            $eiClass = $request->route('eiClass');

            $this->service->createSchedule($request->all(), $eiClass);

            return redirect()
                ->route('school.class.schedule', ['eiClass' => $request->route('eiClass')->uuid])
                ->success(__('success.create_schedule_event'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function update(ClassScheduleUpdateRequest $request, string $role, string $institutionType, EiClass $eiClass, Schedule $schedule)
    {
        try {
            $this->service->updateSchedule($schedule, $eiClass, $request->all());

            return redirect()
                ->route('school.class.schedule', ['eiClass' => $eiClass->uuid])
                ->success(__('success.update_schedule_event'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function destroy(string $role, string $institutionType, EiClass $eiClass, Schedule $schedule)
    {
        try {
            $schedule->delete();

            return redirect()
                ->route('school.class.schedule', ['eiClass' => $eiClass->uuid])
                ->success(__('success.delete_schedule_event'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
