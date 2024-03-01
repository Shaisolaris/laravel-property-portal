<?php

namespace App\Processor\Resources;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\School\app\Models\EiClass;
use Modules\Quiz\app\Http\Resources\EiQuizResource;
use Modules\General\app\Models\StudentHomeworkDiscipline;
use Modules\School\app\Http\Resources\EiClassSubjectResource;

class QuizResource
{
    public const PER_PAGE = 10;

    public function instructor($request): array
    {
        $myClassIds = auth()->user()->myClasses->pluck('id');
        $modelIds = StudentHomeworkDiscipline::whereParentModelType((new EiClass())->getMorphClass())
            ->whereIn('parent_model_id', $myClassIds)->pluck('model_id');

        return [
            'quizzes' => EiQuizResource::collection(EiQuiz::whereIn('id', $modelIds)->latest()->paginate(self::PER_PAGE))
        ];
    }

    public function student($request): array
    {
        return [
            'subjects' => EiClassSubjectResource::collection(auth()->user()->myClass->subjects()->with('quizzes')->latest()->paginate(self::PER_PAGE))
        ];
    }
}
