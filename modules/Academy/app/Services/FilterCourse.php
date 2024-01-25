<?php

namespace Modules\Academy\app\Services;

use Illuminate\Pipeline\Pipeline;
use Modules\Academy\app\Http\Requests\FilterCoursesRequest;
use Modules\Academy\app\Http\Resources\EducationInstitutionCourseResource;
use Modules\Academy\app\Models\EducationInstitutionCourse;
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
        $limit = $this->request->get('limit');

        $filtered = app(Pipeline::class)
            ->send(EducationInstitutionCourse::query())
            ->through([
                FilterByKeyWord::class,
                FilterByType::class,
            ])
            ->thenReturn();

        $filtered->orderBy('created_at', $this->request->get('sort'))
            ->skip($this->request->get('skip'))
            ->take($limit)->limit($limit);


        return EducationInstitutionCourseResource::collection($filtered->get());
    }
}
