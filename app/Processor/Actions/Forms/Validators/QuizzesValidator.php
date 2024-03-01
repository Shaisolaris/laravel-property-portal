<?php

namespace App\Processor\Actions\Forms\Validators;

use Carbon\Carbon;
use App\Enums\LanguageEnum;
use Illuminate\Validation\Rule;
use App\Rules\NegativeNumberRule;
use App\Rules\HasOneTrueValueRule;
use Modules\Quiz\app\Enums\EiQuizGradeEnum;
use Illuminate\Contracts\Support\Arrayable;

class QuizzesValidator implements Arrayable
{
    public function toArray(): array
    {
        $now = Carbon::now();

        $requestHasQuestionsSingle = request()->has('questions.single') && !empty(request()->questions['single']);
        $requestHasQuestionsMultiple = request()->has('questions.multiple') && !empty(request()->questions['multiple']);
        $requestHasQuestionsYesOrNo = request()->has('questions.yes_or_no') && !empty(request()->questions['yes_or_no']);
        $requestHasQuestionsShort = request()->has('questions.short') && !empty(request()->questions['short']);

        $hasQuestionsSingle = Rule::requiredIf($requestHasQuestionsSingle);
        $hasQuestionsMultiple = Rule::requiredIf($requestHasQuestionsMultiple);
        $hasQuestionsYesOrNo = Rule::requiredIf($requestHasQuestionsYesOrNo);
        $hasQuestionsShort = Rule::requiredIf($requestHasQuestionsShort);

        $rules = [
            'quizzes' => 'required|array|min:1',

            'quizzes.*.name' => 'required|string|min:2|max:50',
            'quizzes.*.description' => 'required|string|min:2|max:200',
            'quizzes.*.lecture_id' => 'required|integer',
            'quizzes.*.grade' => ['required', Rule::in(EiQuizGradeEnum::toValues())],
            'quizzes.*.language' => ['required', Rule::in(LanguageEnum::toValues())],
            'quizzes.*.total_score' => 'required|integer|min:1|max:100',
            'quizzes.*.pass_mark' => 'required|integer|min:1',
            'quizzes.*.attempts' => 'required|integer|min:1',
            'quizzes.*.points_no_answer' => ['required', new NegativeNumberRule()],
            'quizzes.*.points_wrong_answer' => ['required', new NegativeNumberRule()],
            'quizzes.*.duration_minutes' => 'required|integer|min:15|max:3600',
            'quizzes.*.start_work_datetime' => ['required','date', 'after:' . $now->format('Y-m-d')],
            'quizzes.*.end_work_datetime' => ['required','date', 'after:' . $now->format('Y-m-d')],

            'quizzes.*.questions' => 'required|array|min:1',

//            'quizzes.*.questions.*.short' => $requestHasQuestionsShort ? [$hasQuestionsShort, 'array'] : '',
            'quizzes.*.questions.short.*.title' => [$hasQuestionsShort, 'string', 'min:2', 'max:50'],
            'quizzes.*.questions.short.*.point' => [$hasQuestionsShort, 'integer', 'min:1', 'max:100'],

//            'quizzes.*.questions.*.single' => $requestHasQuestionsSingle ? [$hasQuestionsSingle, 'array'] : '',
            'quizzes.*.questions.single.*.title' => [$hasQuestionsSingle, 'string', 'min:2', 'max:50'],
            'quizzes.*.questions.single.*.point' => [$hasQuestionsSingle, 'integer', 'min:1', 'max:100'],
            'quizzes.*.questions.single.*.answers' => [$hasQuestionsSingle, 'array'],
            'quizzes.*.questions.single.*.answers.*.is_correct' => [$hasQuestionsSingle, 'bool', new HasOneTrueValueRule(request()->questions['single'] ?? [], 'is_correct')],
            'quizzes.*.questions.single.*.answers.*.answer' => [$hasQuestionsSingle, 'string', 'min:1'],

//            'quizzes.*.questions.*.multiple' => $requestHasQuestionsMultiple ? [$hasQuestionsMultiple, 'array'] : '',
            'quizzes.*.questions.multiple.*.title' => [$hasQuestionsMultiple, 'string', 'min:2', 'max:50'],
            'quizzes.*.questions.multiple.*.point' => [$hasQuestionsMultiple, 'integer', 'min:1', 'max:100'],
            'quizzes.*.questions.multiple.*.answers' => [$hasQuestionsMultiple, 'array'],
            'quizzes.*.questions.multiple.*.answers.*.is_correct' => [$hasQuestionsMultiple, 'bool'],
            'quizzes.*.questions.multiple.*.answers.*.answer' => [$hasQuestionsMultiple, 'string', 'min:1'],

//            'questions.*.yes_or_no' => $requestHasQuestionsYesOrNo ? [$hasQuestionsYesOrNo, 'array'] : '',
            'quizzes.*.questions.yes_or_no.*.title' => [$hasQuestionsYesOrNo, 'string', 'min:2', 'max:50'],
            'quizzes.*.questions.yes_or_no.*.point' => [$hasQuestionsYesOrNo, 'integer', 'min:1', 'max:100'],
            'quizzes.*.questions.yes_or_no.*.answers.*.is_correct' => [$hasQuestionsYesOrNo, 'bool'],
            'quizzes.*.questions.yes_or_no.*.answers.*.answer' => [$hasQuestionsYesOrNo, 'string', 'min:1'],
        ];

        foreach (request()?->quizzes as $index => $quiz) {
            $itemRules = [
                "quizzes.*.start_work_datetime" => 'required|date',
                "quizzes.*.end_work_datetime" => 'required|date',
            ];

            if (empty($quiz['uuid'])) {
                $itemRules["quizzes.*.start_work_datetime"] .= '|after:' . $now->format('Y-m-d');
                $itemRules["quizzes.*.end_work_datetime"] .= '|after:' . $now->format('Y-m-d');
            }

            $rules = array_merge($rules, $itemRules);
        }

        return $rules;
    }
}
