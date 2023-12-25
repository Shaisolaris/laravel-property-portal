@extends('layouts.detached-layout')

<?php
    $items = [
        [
            "icon" => 'ri-group-fill',
            'text' => 'Total Students',
            'count' => 15
        ],
        [
            "icon" => 'ri-computer-fill',
            'text' => 'My Courses',
            'count' => 10
        ],
        [
            "icon" => 'ri-team-fill',
            'text' => 'Pending Meetings',
            'count' => 07
        ],[
            "icon" => 'ri-team-fill',
            'text' => 'Pending Meetings',
            'count' => 15
        ],[
            "icon" => 'ri-team-fill',
            'text' => 'Pending Meetings',
            'count' => '$1,477.60'
        ],
    ];
?>


@section('content')
    <x-card>
        <div class="d-flex justify-content-between">
            @foreach($items as $item)
                <div class="fs-16 p-2">
                    <x-icon-border :icon="$item['icon']" />
                    <div class="pt-3">{{ $item['text'] }}</div>
                    <div>{{ $item['count'] }}</div>
                </div>
            @endforeach
        </div>
    </x-card>
@endsection