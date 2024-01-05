@extends('layouts.detached-layout')

@section('breadcrumbs')
    <x-breadcrumbs title="settings" />
@endsection

@php


    $user = \Illuminate\Support\Facades\Auth::user();
@endphp

@section('content')
    <x-tabs
        :tab-nav-items="[
        [ 'title' => 'profile', 'active' => true, 'icon' => 'ri-account-box-line' ],
        [ 'title' => 'notification', 'active' => false, 'icon' => 'ri-notification-4-line' ],
        [ 'title' => 'password', 'active' => false, 'icon' => 'ri-shield-keyhole-line' ]
    ]"
    >
        <x-slot:tabContent>
            <div class="tab-pane active col-12 col-md-8" id="profile" role="tabpanel">
                @include('pages.instructor.general.settings.tab.profile', ['user' => $user])
            </div>

            <div class="tab-pane col-12 col-md-8" id="notification" role="tabpanel">
                @include('pages.instructor.general.settings.tab.notification', ['user' => $user])
            </div>

            <div class="tab-pane col-12 col-md-8" id="password" role="tabpanel">
                @include('pages.instructor.general.settings.tab.password', ['user' => $user])
            </div>
        </x-slot:tabContent>
    </x-tabs>
@endsection

<style lang="scss">
    .text-p {
        padding: .5rem .75rem
    }
</style>