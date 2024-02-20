<?php

namespace Modules\General\app\Processor\Resources;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Http\Resources\EiQuizResource;

class QuizResource
{
    const PER_PAGE = 10;


    public function instructor($request): array
    {
        $user = $request->user();

        return [
            'quizzes' => EiQuizResource::collection(EiQuiz::whereIn('')->latest()->paginate(self::PER_PAGE))
        ];
    }

    public function student($request): array
    {
        return [
            'quizzes' => EiQuizResource::collection(EiQuiz::latest()->paginate(self::PER_PAGE))
        ];
    }
}