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
    public function getList(EducationInstitutionIndexRequest $request)
    {


        $query = EducationInstitution::query()
            ->with(['institutionType', 'organizers']);

        if($request->search) {
            $query->where(function ($query) use ($request) {
                /** @var Builder $query */
                $query->orWhere('name', 'ilike', "%{$request->search}%");
                $query->orWhere('description', 'ilike', "%{$request->search}%");
                $query->orWhere('slug', 'ilike', "%{$request->search}%");
            });
        }


        return $query->paginate();

    }


    public function saveInstitution(?EducationInstitution $institution, EducationInstitutionSaveRequest $request)
    {
        $institution = $institution ?? EducationInstitution::make();

        $institution->fill($request->validated());

        if(empty($institution->slug)) {
            $institution->slug = Str::slug($request->name);
        }

        $institution->institutionType()->associate($request->education_institution_type_id);

        $institution->save();
    }

    public function syncOrganizers(EducationInstitution $institution, array $uuids)
    {

        $organisers = User::query()
            ->onlyOrganisers()
            ->whereIn('uuid', $uuids)
            ->get();

        $institution->organizers()->sync($organisers);
    }

    public function getTypes()
    {


        return EducationInstitutionType::query()
            ->where('status', 'active')
            ->get()
            ->pluck('name', 'id');

    }

    public function getSelectList()
    {

        $query = EducationInstitution::query()
            ->available()
            ->with(['institutionType']);


        return $query->get();

    }

}
