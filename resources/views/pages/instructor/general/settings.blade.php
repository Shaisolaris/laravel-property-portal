@extends('layouts.detached-layout')

@section('breadcrumbs')
    <x-breadcrumbs title="settings" />
@endsection

@php
    $icons = [
        0 => 'ri-chat-3-line',
        1 => 'ri-function-line',
        2 => 'ri-tools-line',
        3 => 'ri-percent-line',
    ];
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
            <div class="tab-pane active col-12 col-lg-7" id="profile" role="tabpanel">
                <x-card.base>
                    <div class="pb-3">
                        <x-text key="page.settings.profile.profile_photo" class="fw-medium" />
                    </div>

                    <div class="row position-relative">
                        <div class="col-2">
                            <x-avatar
                                :src="$user->avatar"
                                size="xl"
                                rounded="circle"
                            />
                        </div>
                        <div class="col-10 pt-4">
                            <div class="text-dim-gray">
                                {{ $user->bio ?? 'Please add your bio...' }}
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 text-end">
                            <x-button.submit icon="ri-upload-2-line" key="upload" />
                        </div>
                    </div>
                    <x-line />

                    <div>
                        <div class="pb-3">
                            <x-text key="page.settings.profile.basic_information.title" class="fw-medium " />
                        </div>

                        <form action="">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="row align-items-center gx-4">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-text
                                                key="page.settings.profile.basic_information.items.0"
                                                class="text-dim-gray fw-medium"
                                            />
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-form.input name="full_name" :value="$user->full_name" />
                                        </div>
                                        <div class="text-end col-12 col-md-4 col-lg-4">
                                            <x-icon icon-class="ri-edit-box-line text-royal-blue" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-text
                                                key="page.settings.profile.basic_information.items.1"
                                                class="text-dim-gray fw-medium"
                                            />
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-8">
                                            {{--<x-button.base key="save" />--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-text
                                                key="page.settings.profile.basic_information.items.2"
                                                class="text-dim-gray fw-medium"
                                            />
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-form.input name="gender" :value="$user->gender" />
                                        </div>
                                        <div class="text-end col-12 col-md-4 col-lg-4">
                                            <x-icon icon-class="ri-edit-box-line text-royal-blue" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-text
                                                key="page.settings.profile.basic_information.items.3"
                                                class="text-dim-gray fw-medium"
                                            />
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-form.input name="gender" :value="$user->timezone" />
                                        </div>
                                        <div class="text-end col-12 col-md-4 col-lg-4">
                                            <x-icon icon-class="ri-edit-box-line text-royal-blue" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <x-text
                                                key="page.settings.profile.basic_information.items.4"
                                                class="text-dim-gray fw-medium"
                                            />
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            @if(count(getUserLanguagesLists()) > 0)
                                                @foreach(getUserLanguagesLists() as $lang)
                                                    <span class="fw-medium">{{ $lang }}@if(!$loop->last),@endif</span>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="text-end col-12 col-md-4 col-lg-4">
                                            <x-icon icon-class="ri-edit-box-line text-royal-blue" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </x-card.base>
            </div>

            <div class="tab-pane" id="notification" role="tabpanel">
                @foreach(range(0, 3) as $index)
                    <div class="row g-2">
                        <div class="col-12">
                            <x-card.base>
                                <form action="">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="text-dim-gray fw-medium">
                                                <x-icon :iconClass="$icons[$index]" />
                                                {{trans("translation.page.settings.notification.$index.title")}}
                                            </div>
                                            <div class="">{{trans("translation.page.settings.notification.$index.text")}}</div>
                                        </div>
                                        <div>
                                            <x-base-switch size="lg" />
                                        </div>
                                    </div>
                                </form>
                            </x-card.base>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="tab-pane col-12 col-md-8 col-lg-6" id="password" role="tabpanel">
                <form action="">
                    <x-card.base>
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4 col-lg-4 text-start">
                                        <div>{{ trans('translation.label.email') }}</div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <x-form.input
                                            name="email"
                                            :value="\Illuminate\Support\Facades\Auth::user()->email"
                                        />
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 text-end">
                                        <x-link key="change" href="javascript:void(0);" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4 col-lg-4 text-start">
                                        <div>{{ trans('translation.label.password') }}</div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <x-form.input name="password" type="password" value="grg" />
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 text-end">
                                        <x-link key="update" href="javascript:void(0);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-card.base>
                </form>
            </div>
        </x-slot:tabContent>
    </x-tabs>
@endsection