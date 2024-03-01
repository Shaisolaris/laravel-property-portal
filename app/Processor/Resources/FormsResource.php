<?php

namespace App\Processor\Resources;

use App\Enums\EducationInstitutions\EducationInstitutionContentTypesEnum;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
use App\Enums\User\UserExperienceEnum;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Processor\Helpers\NavigationForms;
use Modules\Assignment\app\Http\Resources\EiAssignmentResource;
use Modules\General\app\Http\Resources\EiCategoryResource;
use Modules\General\app\Http\Resources\EiSectionResource;
use Modules\General\app\Models\EducationInstitutionCategory;
use Modules\Quiz\app\Enums\EiQuizGradeEnum;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\Quiz\app\Http\Resources\EiQuizTypeResource;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\School\app\Models\EiClassSubject;

class FormsResource
{
    public function instructor($request): array
    {
        $school = collect();
        $user = $request->user();
        $modelSteps = new NavigationForms();

        if($user->institution_type == EducationInstitutionTypeEnum::School()->value) {
            /** @var EiClassSubject $subject */
            $subject = $request->route('subject');

            $school = [
                'subject' => $subject->uuid,
                'eiClass' => $subject->eiClass->uuid,
                'grades' => EiQuizGradeEnum::getLabelsValues(),
                'quizTypes' => EiQuizTypeResource::collection(EiQuizType::orderBy('id')->get()),
                'quizzes' => EiQuizResource::collection($subject->quizzes->load('questions')),
                'assignments' => EiAssignmentResource::collection($subject->assignments->load('media')),
                'contents' => EiSectionResource::collection($subject->sections->load('lectures')),
                'title' => 'curriculum'
            ];
        }

        return [
            'program' => $request->has('program') ? $request->route('program') : 'subject',
            'steps' => $modelSteps->steps($request->user()),
            'content_types' => EducationInstitutionContentTypesEnum::toArray(),
            'levels' => UserExperienceEnum::toArray(),
            'tags' => TagResource::collection(Tag::all()),
            'categories' => EiCategoryResource::collection(EducationInstitutionCategory::withoutParent()->get()),
            'title' => 'add-new-course',
            ...$school
        ];
    }
}
