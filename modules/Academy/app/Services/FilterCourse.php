<?php

namespace Modules\Academy\app\Services;

use App\Enums\User\UserRoleEnum;
use Illuminate\Pipeline\Pipeline;
use Modules\Academy\app\Http\Requests\FilterCoursesRequest;
use Modules\Academy\app\Http\Resources\EducationInstitutionCourseResource;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseUserCourses;
use Modules\Academy\app\Pipes\FilterByKeyWord;
use Modules\Academy\app\Pipes\FilterByType;

class FilterCourse
{
    public FilterCoursesRequest $request;

    public function __construct(FilterCoursesRequest $request)
    {
        $this->request = $request;
    }

    public function filter(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = $this->queryCourses();

        $filtered = app(Pipeline::class)
            ->send($query)
            ->through([
                FilterByKeyWord::class,
                FilterByType::class,
            ])
            ->thenReturn();

        $limit = $this->request->input('limit');

        $filtered->orderBy('created_at', $this->request->input('sort'))
            ->skip($this->request->input('skip'))
            ->take($limit)->limit($limit);

        return EducationInstitutionCourseResource::collection($filtered->get());
    }

    protected function queryCourses()
    {
        return auth()->user()->hasRole(UserRoleEnum::Student()->value)
            ? $this->student()
            : $this->instructor();
    }

    protected function student()
    {
        return EducationInstitutionCourse::whereIn(
            'id',
            EducationInstitutionCourseUserCourses::whereUserId(auth()->id())->pluck('course_id')
        );
    }

    protected function instructor(): \Illuminate\Database\Eloquent\Builder
    {
        return EducationInstitutionCourse::query(); // TODO::
    }
}
