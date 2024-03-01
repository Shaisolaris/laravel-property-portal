<?php

namespace Modules\Admin\app\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Modules\General\app\Models\EducationInstitution;
use Modules\General\app\Models\EducationInstitutionType;
use Modules\Admin\app\Http\Requests\EducationInstitution\EducationInstitutionSaveRequest;
use Modules\Admin\app\Http\Requests\EducationInstitution\EducationInstitutionIndexRequest;

class EducationInstitutionService
{
    public function getList(EducationInstitutionIndexRequest $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Pagination\LengthAwarePaginator|array|\LaravelIdea\Helper\Modules\General\app\Models\_IH_EducationInstitution_C
    {
        $query = EducationInstitution::query()
            ->with(['institutionType', 'organizers']);

        if ($request->search) {
            $query->where(function ($query) use ($request) {
                /** @var Builder $query */
                $query->orWhere('name', 'ilike', "%{$request->search}%");
                $query->orWhere('description', 'ilike', "%{$request->search}%");
                $query->orWhere('slug', 'ilike', "%{$request->search}%");
            });
        }

        return $query->paginate();
    }


    public function saveInstitution(?EducationInstitution $institution, EducationInstitutionSaveRequest $request): void
    {
        $institution = $institution ?? EducationInstitution::make();

        $institution->fill($request->validated());

        if (empty($institution->slug)) {
            $institution->slug = Str::slug($request->name);
        }

        if ($request->hasFile('image')) {
            $institution->clearMediaCollection('image');
            $institution->singleFileUpload($request->file('image'), 'image');
        }

        $institution->institutionType()->associate($request->education_institution_type_id);

        $institution->save();
    }

    public function syncOrganizer(EducationInstitution $institution, string $uuid): void
    {
        $organiser = User::query()
            ->onlyOrganisers()
            ->where('uuid', $uuid)
            ->take(1)
            ->get();

        $institution->organizers()->sync($organiser);
    }

    public function getTypes(): \Illuminate\Support\Collection
    {
        return EducationInstitutionType::query()
            ->where('status', 'active')
            ->get()
            ->pluck('name', 'id');
    }

    public function getSelectList(): \Illuminate\Database\Eloquent\Collection|array|\LaravelIdea\Helper\Modules\General\app\Models\_IH_EducationInstitution_C
    {
        $query = EducationInstitution::query()
            ->available()
            ->with(['institutionType']);

        return $query->get();
    }
}
