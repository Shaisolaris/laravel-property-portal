@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'assignments.my-students', 'icon' => 'mdi mdi-file-chart', 'amount' => 40],
       ['text' => 'assignments.total-sessions', 'icon' => 'mdi mdi-file-clock', 'amount' => 30],
       ['text' => 'assignments.my-courses', 'icon' => 'mdi mdi-file-check', 'amount' => 10],
       ['text' => 'assignments.favourite-students', 'icon' => 'mdi mdi-file-remove', 'amount' => 10]
    ];

    $tabNavItems = [
        [ 'title' => 'my-students', 'active' => true ],
        [ 'title' => 'favorite', 'active' => false ]
    ];
@endphp

@section('content')
    <div>
        <h2 class="section-title">{{ trans('translation.page-titles.mentoring') }}</h2>
    </div>

    <x-card.card-blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />

    <div>
        <x-tabs :tabNavItems="$tabNavItems">
            <x-slot:tabContent>
                <div class="tab-pane active" id="my-students" role="tabpanel">
                    @foreach($instructors as $instructor)
                        <x-card.simple :item="$instructor">
                            <x-slot:image>{{$instructor->getAvatar(70)}}</x-slot:image>
                            <x-slot:description>
                                <p>
                                    @if(!empty($instructor->occupations))
                                        @foreach($instructor->occupations as $occupation)
                                            @if(!empty($occupation->category))
                                                {{ $occupation->category->title }}{{ !($loop->last) ? ', ' : '' }}
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                                <span>{{ truncate($instructor->about, 200) }}</span>
                            </x-slot:description>
                            <x-slot:link>
                                <a href="{{ route('instructor.academy.mentoring.detail',['id' => $instructor->id]) }}">
                                    <h2 class="card-title fw-bold mb-3 fs-20 font-weight-bold">{{ $instructor->full_name }}</h2>
                                </a>
                            </x-slot:link>
                        </x-card.simple>
                    @endforeach
                </div>
                <div class="tab-pane active" id="favorite" role="tabpanel">

                </div>
            </x-slot:tabContent>
        </x-tabs>
    </div>
@endsection
