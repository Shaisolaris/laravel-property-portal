@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'block-amount.quiz.quizzes', 'icon' => 'bx bx-list-ul', 'amount' => $quizzesCount],
       ['text' => 'block-amount.quiz.questions', 'icon' => 'bx bx-question-mark', 'amount' => $questionsCount],
       ['text' => 'block-amount.quiz.students', 'icon' => 'bx bxs-user-detail', 'amount' => $userCount],
    ];
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="quiz" />
@endsection

@section('content')
    <x-card.blocks-amount :items="$items" cols="col-12 col-sm-4" />

    <x-tabs :tab-nav-items="[
        [ 'title' => 'all', 'active' => setActiveTabNavItem(true, 'status', 'all'), 'href' => route('instructor.school.quiz', ['status' => 'all'])],
        [ 'title' => 'active', 'active' => setActiveTabNavItem(false, 'status', 'active'), 'href' => route('instructor.school.quiz', ['status' => 'active'])]
    ]">
        <x-slot:tabContent>
            <div class="tab-pane active" id="all" role="tabpanel">
                @include('pages.instructor.school.quiz.includes.table', ['quizzes' => $quizzes])
            </div>

            <div class="tab-pane" id="active" role="tabpanel">
                @include('pages.instructor.school.quiz.includes.table', ['quizzes' => $quizzes])
            </div>
        </x-slot:tabContent>
    </x-tabs>
@endsection