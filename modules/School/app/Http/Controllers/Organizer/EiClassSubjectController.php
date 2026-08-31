<?php

namespace Modules\School\app\Http\Controllers\Organizer;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Modules\School\app\Models\EiClass;
use App\Http\Resources\UserSelectResource;
use Modules\School\app\Models\EiClassSubject;
use Modules\School\app\Services\EiClassService;
use Modules\School\app\Http\Resources\EiClassResource;
use Modules\School\app\Http\Resources\EiClassSubjectResource;
use Modules\School\app\Http\Requests\UpdateOrCreateEiClassSubjectRequest;

class EiClassSubjectController extends Controller
{
    public function __construct(protected EiClassService $service)
    {
        parent::__construct();

//        $this->authorizeResource(EiClassSubject::class, 'eiClass');
    }


    public function index(string $role, string $institutionType, EiClass $eiClass): Response
    {
        return Inertia::render('School::Organizer/Class/Tabs/SubjectTab', [
            'eiClass' => EiClassResource::make($eiClass),
            'instructors' => UserSelectResource::collection($this->service->getInstructors($this->user)),
            'subjects' => EiClassSubjectResource::collection($this->service->getClassSubjects($eiClass))
        ]);
    }


    public function store(UpdateOrCreateEiClassSubjectRequest $request)
    {
        try {
            $eiClass = $request->route('eiClass');

            $this->service->updateOrCreateSubjects($request->all(), $eiClass);

            return redirect()
                ->to(route('school.class.subject.index', ['eiClass' => $eiClass->uuid]))
                ->success(__('success.create_class_subject'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function update(UpdateOrCreateEiClassSubjectRequest $request)
    {
        try {
            $eiClass = $request->route('eiClass');

            $this->service->updateOrCreateSubjects($request->all(), $eiClass);

            return redirect()
                ->to(route('school.class.subject.index', ['eiClass' => $eiClass->uuid]))
                ->success(__('success.update_class_subject'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }


    public function destroy(string $role, string $institutionType, EiClass $eiClass, EiClassSubject $eiClassSubject)
    {
        try {
            $eiClassSubject->schedule()->delete();
            $eiClassSubject->instructors()->detach();
            $eiClassSubject->media()->delete();
            $eiClassSubject->delete();

            return redirect()->to(route('school.class.subject.index', ['eiClass' => $eiClassSubject->eiClass->uuid]))->success(__('success.create_class'));
        } catch (\Exception $e) {
            return back()->error($e->getMessage());
        }
    }
}
