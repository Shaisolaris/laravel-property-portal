<?php

namespace Modules\General\app\Processor\Resources;

use App\Enums\EducationInstitutions\EducationInstitutionContentTypesEnum;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
use App\Enums\User\UserExperienceEnum;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Modules\General\app\Http\Resources\EiCategoryResource;
use Modules\General\app\Http\Resources\EiSectionLectureResource;
use Modules\General\app\Models\EducationInstitutionCategory;
use Modules\General\app\Processor\Helpers\NavigationForms;
use Modules\Quiz\app\Enums\GradeEnum;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\Quiz\app\Http\Resources\EiQuizTypeResource;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Services\MyClassService;

class FormsResource
{
    public function instructor($request): array
    {
        $school = collect();
        $user = $request->user();
        $modelSteps = new NavigationForms();
        $myClassService = new MyClassService();

        if($user->institution_type == EducationInstitutionTypeEnum::School()->value) {

            $quiz = $request->route('quiz'); // TODO:: Not working

            $school = [
                'subject_uuid' => $request->route('subject'),
                'lectures' => EiSectionLectureResource::collection($myClassService->getLectures(EiClass::find(11))),
                'grades' => GradeEnum::getLabelsValues(),
                'quizTypes' => EiQuizTypeResource::collection(EiQuizType::orderBy('id')->get()),
                'quiz' => [],
//                'quiz' => EiQuizResource::make($quiz->load('questions'))
            ];
        }

        return [
            'program' => $request->has('program') ? $request->route('program') : 'subject',
            'steps' => $modelSteps->steps($request->user()),
            'content_types' => EducationInstitutionContentTypesEnum::toArray(),
            'levels' => UserExperienceEnum::toArray(),
            'tags' => TagResource::collection(Tag::all()),
            'categories' => EiCategoryResource::collection(EducationInstitutionCategory::withoutParent()->get()),
            ...$school
        ];
    }
}
