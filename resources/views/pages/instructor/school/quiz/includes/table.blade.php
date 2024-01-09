<x-table.base key-header="{{App\Enums\TableHeaderEnum::HEADER_INSTRUCTOR_SCHOOL_QUIZZES}}" align="text-center">
    <x-slot:body>
        @foreach($quizzes as $quiz)
            <tr class="fs-12 text-dim-gray text-center">
                <td class="text-start">
                    <div class="fs-16 fw-medium text-black">{{ $quiz->title }}</div>
                    <div>
                        @if(!empty($quiz->webinar))
                            {{ $quiz->webinar->title }}
                        @else
                            {{ trans('panel.not_assign_any_webinar') }}
                        @endif
                    </div>
                </td>
                <td>
                    {{ $quiz->quizQuestions->count() }}

                    @if(($quiz->display_limited_questions and !empty($quiz->display_number_of_questions)))
                        <span>({{ trans('public.active') }}: {{ $quiz->display_number_of_questions }})</span>
                    @endif
                </td>
                <td>{{ $quiz->time }}</td>
                <td>{{ $quiz->quizQuestions->sum('grade') }}</td>
                <td>{{ $quiz->pass_mark }}</td>
                <td>
                    <div>{{ $quiz->quizResults->pluck('user_id')->count() }}</div>

                    @if(!empty($quiz->userSuccessRate) and $quiz->userSuccessRate > 0)
                        <div class="text-emerald-green">{{ $quiz->userSuccessRate }}% {{ trans('quiz.passed')}}</div>
                    @endif
                </td>
                <td>
                    <x-table.partials.td.status :key="$quiz->status" :with-bg="false" />
                </td>
                <td>
                    <x-date :value="$quiz->created_at" format="j M Y H:i" />
                </td>
                <td>
                    <x-table.partials.td.action>
                        <x-slot:body>
                            <li>
                                <a href="/panel/quizzes/{{ $quiz->id }}/edit" class="dropdown-item">
                                    <i class="ri-pencil-fill align-bottom text-primary"></i>
                                    {{ trans("translation.table.action.edit") }}
                                </a>
                            </li>
                            <li>
                                <a href="/panel/quizzes/{{ $quiz->id }}/delete" class="dropdown-item">
                                    <i class="ri-delete-bin-line align-bottom text-danger"></i>
                                    {{ trans("translation.table.action.delete") }}
                                </a>
                            </li>
                        </x-slot:body>
                    </x-table.partials.td.action>
                </td>
            </tr>
        @endforeach
    </x-slot:body>
    <x-slot:pagination>
        {{  $quizzes->links() }}
    </x-slot:pagination>
</x-table.base>