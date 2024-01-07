@extends('layouts.detached-layout')

@php
    $number = request()->route('step'); // TODO::
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="course"></x-breadcrumbs>
@endsection

@section('content')
    <div class="add-new-course">
        @include('.pages.instructor.academy.course.steps.partials.navigation-steps')
    </div>
    <div class="steps mt-4">
        <div class="{{$number == 1 ? 'd-block' : 'd-none'}}" id="step_1">
            @include('.pages.instructor.academy.course.steps.basic-information')
        </div>
        <div class="{{$number == 2 ? 'd-block' : 'd-none'}}" id="step_2">
            @include('.pages.instructor.academy.course.steps.advance-information')
        </div>
        <div class="{{$number == 3 ? 'd-block' : 'd-none'}}" id="step_3">
            @include('.pages.instructor.academy.course.steps.curriculum')
        </div>
        <div class="{{$number == 4 ? 'd-block' : 'd-none'}}" id="step_4">
            @include('.pages.instructor.academy.course.steps.assignments-quiz')
        </div>
        <div class="{{$number == 5 ? 'd-block' : 'd-none'}}" id="step_5">
            @include('.pages.instructor.academy.course.steps.pricing-payments')
        </div>
        <div class="{{$number == 6 ? 'd-block' : 'd-none'}}" id="step_6">
            @include('.pages.instructor.academy.course.steps.publish-course')
        </div>
    </div>
@endsection
