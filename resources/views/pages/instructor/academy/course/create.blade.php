@extends('layouts.detached-layout')

@php
    $number = request()->route('step'); // TODO::

    if(is_null($number) && empty($number)) $number = 1;

    if($number < 1) $number = 1;
    if($number > 6) $number = 6;
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="course">
        <x-slot:rightSide>
            <x-button.link :href="route('instructor.academy.courses.add-new-course')" key="send-review"/>
            <x-button.link :href="route('instructor.academy.courses.add-new-course')" key="save-draft"/>
        </x-slot:rightSide>
    </x-breadcrumbs>
@endsection

@section('content')
    <form
        autocomplete="off"
        enctype="multipart/form-data"
        action="#"
        method="post">
        @csrf
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
    </form>
    <div class="navigation-by-form-steps d-flex justify-content-between mt-3">
        <x-button.link
            disabled="{{$number <= 1 ? true : false}}"
            :href="route('instructor.academy.courses.add-new-course',['step' => $number - 1])"
            viewType="icon-left"
            icon="ri-arrow-left-line"
            key="previous"/>
        <x-button.link
            disabled="{{$number >= 6 ? true : false}}"
            :href="route('instructor.academy.courses.add-new-course',['step' => $number + 1])"
            key="continue"
            viewType="icon-right"
            icon="ri-arrow-right-line"
        />
    </div>
@endsection
