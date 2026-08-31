<?php

namespace Modules\Quiz\app\Http\Requests;

use Carbon\Carbon;
use App\Enums\LanguageEnum;
use Illuminate\Validation\Rule;
use App\Rules\HasOneTrueValueRule;
use Modules\Quiz\app\Enums\GradeEnum;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrCreateQuizRequest extends FormRequest
{
    public function rules(): array
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

        return [
            'title' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:2|max:200',
            'lecture_id' => 'required|integer|exists:ei_section_lectures,id',
            'grade' => ['required', Rule::in(GradeEnum::toValues())],
            'language' => ['required', Rule::in(LanguageEnum::toValues())],
            'grade_passing_score' => 'required|integer|min:1',
            'pass_mark' => 'required|integer|min:1',
            'number_attempts' => 'required|integer|min:1',
            'points_no_answer' => 'required|min:1',
            'points_wrong_answer' => 'required|min:1',
            'time' => 'required|integer|min:15|max:3600',
            'start_work_datetime' => ['required','date', request()->method === 'POST' ? 'after:' . $now->format('Y-m-d') : ''],
            'end_work_datetime' => ['required','date', request()->method === 'POST' ? 'after:' . $now->format('Y-m-d') : ''],

            'questions' => 'required|array',

//            'questions.*.short' => $requestHasQuestionsShort ? [$hasQuestionsShort, 'array'] : '',
            'questions.short.*.title' => [$hasQuestionsShort, 'string', 'min:2', 'max:50'],
            'questions.short.*.point' => [$hasQuestionsShort, 'integer', 'min:1', 'max:100'],

//            'questions.*.single' => $requestHasQuestionsSingle ? [$hasQuestionsSingle, 'array'] : '',
            'questions.single.*.title' => [$hasQuestionsSingle, 'string', 'min:2', 'max:50'],
            'questions.single.*.point' => [$hasQuestionsSingle, 'integer', 'min:1', 'max:100'],
            'questions.single.*.answers' => [$hasQuestionsSingle, 'array'],
            'questions.single.*.answers.*.is_correct' => [$hasQuestionsSingle, 'bool', new HasOneTrueValueRule(request()->questions['single'] ?? [], 'is_correct')],
            'questions.single.*.answers.*.answer' => [$hasQuestionsSingle, 'string', 'min:1'],

//            'questions.*.multiple' => $requestHasQuestionsMultiple ? [$hasQuestionsMultiple, 'array'] : '',
            'questions.multiple.*.title' => [$hasQuestionsMultiple, 'string', 'min:2', 'max:50'],
            'questions.multiple.*.point' => [$hasQuestionsMultiple, 'integer', 'min:1', 'max:100'],
            'questions.multiple.*.answers' => [$hasQuestionsMultiple, 'array'],
            'questions.multiple.*.answers.*.is_correct' => [$hasQuestionsMultiple, 'bool'],
            'questions.multiple.*.answers.*.answer' => [$hasQuestionsMultiple, 'string', 'min:1'],

//            'questions.*.yes_or_no' => $requestHasQuestionsYesOrNo ? [$hasQuestionsYesOrNo, 'array'] : '',
            'questions.yes_or_no.*.title' => [$hasQuestionsYesOrNo, 'string', 'min:2', 'max:50'],
            'questions.yes_or_no.*.point' => [$hasQuestionsYesOrNo, 'integer', 'min:1', 'max:100'],
            'questions.yes_or_no.*.answer.correct_answer' => [$hasQuestionsYesOrNo, 'min:1'],
            'questions.yes_or_no.*.answer.incorrect_answer' => [$hasQuestionsYesOrNo, 'min:1'],
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
