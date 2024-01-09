@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'course.assignments', 'icon' => 'mdi mdi-file-chart', 'amount' => $courseAssignmentsCount],
       ['text' => 'course.pending', 'icon' => 'mdi mdi-file-clock', 'amount' => $pendingReviewCount],
       ['text' => 'course.passed', 'icon' => 'mdi mdi-file-check', 'amount' => $passedCount],
       ['text' => 'course.failed', 'icon' => 'mdi mdi-file-remove', 'amount' => $failedCount]
    ];
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="assignments" />
@endsection

@section('content')
    <x-card.blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />

    <x-tabs :tab-nav-items="[[ 'title' => 'all', 'active' => true ], [ 'title' => 'recent', 'active' => false ]]" />

    <x-table.base key-header="{{\App\Enums\TableHeaderEnum::HEADER_INSTRUCTOR_SCHOOL_ASSIGNMENTS}}">
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
                                    <x-text key="from" />:
                                    {{ $assignment->assignmentHistory->student->full_name }}
                                </div>
                                <div class="text-dim-gray fs-12">
                                    <x-text key="assigned" />:
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
                        <x-table.partials.td.status :key="$assignment?->status" icon="ri-time-line" />
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
    </x-table.base>
@endsection
