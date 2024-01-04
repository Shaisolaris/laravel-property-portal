@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'course.assignments', 'icon' => 'mdi mdi-file-chart', 'amount' => $courseAssignmentsCount],
       ['text' => 'course.pending', 'icon' => 'mdi mdi-file-clock', 'amount' => $pendingReviewCount],
       ['text' => 'course.passed', 'icon' => 'mdi mdi-file-check', 'amount' => $passedCount],
       ['text' => 'course.failed', 'icon' => 'mdi mdi-file-remove', 'amount' => $failedCount]
    ];

    $tabNavItems = [
        [ 'title' => 'reviewed', 'active' => true ],
        [ 'title' => 'pending_review', 'active' => false ]
    ];
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="assignments"/>
@endsection

@section('content')
    <x-card.card-blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />

    <div>
        <x-tabs :tabNavItems="$tabNavItems" name="Assignments">
            <x-slot:tabContent>
                <div class="tab-pane active" id="reviewed" role="tabpanel">
                    <x-table.table key-header="instructor_school_assignments">
                        <x-slot:body>
                            @foreach($assignments as $assignment)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <x-avatar :src="$assignment?->assignmentHistory?->student?->avatar" rounded="circle" size="sm" />
                                            </div>
                                            <div>
                                                <div class="fs-16 fw-medium">
                                                    {{trans('translation.from')}}
                                                    {{ $assignment->assignmentHistory->student->full_name }}
                                                </div>
                                                <div class="text-dim-gray fs-12">
                                                    {{trans('translation.assigned')}}:
                                                    <x-date :value="$assignment->created_at ?? ''" format="D j Y" />
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <x-date :value="$assignment?->deadlineTime ?? ''" format="D j Y" />
                                    </td>
                                    <td>
                                        <span class="fs-14">{{ $assignment?->assignmentHistory?->grade }}/{{ $assignment?->grade }}</span>
                                    </td>
                                    <td>
                                        <x-table.partials.td.status :key="$assignment?->status" variable="" />
                                    </td>
                                    <td>
                                        <x-link :href="route('instructor.academy.assignment.show', $assignment?->id)" icon="ri-eye-fill" key="view_assignment" />
                                    </td>
                                </tr>
                            @endforeach
                        </x-slot:body>

                        <x-slot:pagination>
                            {{ $assignments->links() }}
                        </x-slot:pagination>
                    </x-table.table>
                </div>

                <div class="tab-pane" id="pending_review" role="tabpanel">
                    <x-card.card>

                    </x-card.card>
                </div>
            </x-slot:tabContent>
        </x-tabs>
    </div>
@endsection
