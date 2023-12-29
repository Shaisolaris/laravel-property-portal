@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'course.assignments', 'icon' => 'mdi mdi-file-chart', 'amount' => $courseAssignmentsCount],
       ['text' => 'course.pending', 'icon' => 'mdi mdi-file-clock', 'amount' => $pendingReviewCount],
       ['text' => 'course.passed', 'icon' => 'mdi mdi-file-check', 'amount' => $passedCount],
       ['text' => 'course.failed', 'icon' => 'mdi mdi-file-remove', 'amount' => $failedCount]
    ];
@endphp

@section('content')
    <x-card-blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />

    <x-table.table key-header="instructor_school_assignments">
        <x-slot:filterSort>

        </x-slot:filterSort>

        <x-slot:body>
            @foreach($assignments as $assignment)
                <tr>
                    <td><span>gg</span></td>
                    <td>
                        <x-date :value="$assignment['deadlineTime'] ?? ''" format="D j Y" />
                    </td>
                    <td><span>gg</span></td>
                    <td><span>gg</span></td>
                    <td>
                        <x-link href="google.com" icon="ri-eye-fill" key="view_assignment" />
                    </td>
                </tr>
            @endforeach
        </x-slot:body>

        <x-slot:pagination>
            {{ $assignments->links() }}
        </x-slot:pagination>
    </x-table.table>
@endsection