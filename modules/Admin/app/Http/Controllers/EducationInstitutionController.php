<?php

namespace Modules\Admin\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\Admin\app\Services\UserService;
use Modules\Admin\app\Http\Resources\UserResource;
use Modules\General\app\Models\EducationInstitution;
use Modules\Admin\app\Services\EducationInstitutionService;
use Modules\Admin\app\Http\Resources\EducationInstitutionResource;
use App\Enums\EducationInstitutions\EiStatusEnum;
use Modules\Admin\app\Http\Requests\EducationInstitution\EducationInstitutionSaveRequest;
use Modules\Admin\app\Http\Requests\EducationInstitution\EducationInstitutionIndexRequest;

class EducationInstitutionController extends Controller
{
    public function __construct(protected EducationInstitutionService $institutionService, protected UserService $userService)
    {
        parent::__construct();
    }

    public function index(EducationInstitutionIndexRequest $request)
    {
        return Inertia::render('Admin::EducationInstitution/Index', [
            'institutions' => EducationInstitutionResource::collection(
                $this->institutionService->getList($request)
            ),
            'filters' => $request->validated(),
        ]);
    }

    public function edit(Request $request, EducationInstitution $institution)
    {
        return $this->editFormResponse($institution);
    }

    public function create(Request $request)
    {
        return $this->editFormResponse();
    }

    public function save(EducationInstitutionSaveRequest $request, ?EducationInstitution $institution)
    {
        $this->institutionService->saveInstitution($institution, $request);

//        if(!empty($request->organizer_uuid)) {
//            $this->institutionService->syncOrganizer($institution, $request->organizer_uuid);
//        }

        return Redirect::route('admin.institution.edit', ['institution' => $institution])
            ->success($institution->wasRecentlyCreated ? 'admin.page.institution.create-success' : 'admin.page.institution.save-success');
    }

    protected function editFormResponse(?EducationInstitution $institution = null): Response
    {
        $institution?->load(['institutionType', 'organizers.roles']);

        return Inertia::render('Admin::EducationInstitution/Edit', [
            'institution' => $institution ? EducationInstitutionResource::make($institution) : null,
            'institutionTypes' => $this->institutionService->getTypes(),
            'organizers' => UserResource::collection($this->userService->getOrganizers($institution)),
            'statuses' => EiStatusEnum::getLabelsValues(),
        ]);
    }
}
