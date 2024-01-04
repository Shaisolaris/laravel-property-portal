@extends('layouts.detached-layout')
@php
    $tabNavItems = [
        [ 'title' => 'courses', 'active' => true ],
        [ 'title' => 'sessions', 'active' => false ]
    ];
@endphp
@section('content')
    <div class="detail-mentor">
        <div>
            <x-card.simple :item="$user">
                <x-slot:image>{{$user->getAvatar(70)}}</x-slot:image>
                <x-slot:description>{{$user->about}}</x-slot:description>
                <x-slot:link>
                    <h2 class="card-title fw-bold mb-3 fs-20 font-weight-bold">{{ $user->full_name }}</h2>
                </x-slot:link>
            </x-card.simple>
        </div>
        <div>
            <x-tabs :tabNavItems="$tabNavItems">
                <x-slot:tabContent>
                    <div class="tab-pane active" id="courses" role="tabpanel">
                        @foreach($webinars as $webinar)
                            <div class="col-sm-6 col-xl-4">
                                <x-card.little :item="$webinar">
                                    <x-slot:price>
                                        @php
                                            $discount = 0;
                                            if(!empty($isRewardCourses) && !empty($webinar->points)) {
                                                $price = $webinar->points;
                                            } elseif(!empty($webinar->price) && $webinar->price > 0) {
                                                if($webinar->bestTicket() < $webinar->price) {
                                                    $discount = handlePrice($webinar->bestTicket(), true, true, false, null, true);
                                                    $price = handlePrice($webinar->price, true, true, false, null, true);
                                                } else {
                                                    $price = handlePrice($webinar->price, true, true, false, null, true);
                                                }
                                            } else {
                                                $price = 0;
                                            }
                                        @endphp
                                        <x-card.partials.price value="{{$price}}" classes="fs-20 font-weight-bold" discount="{{$discount}}"/>
                                    </x-slot:price>
                                    <x-slot:hours>{{convertMinutesToHourAndMinute($webinar->duration)}}</x-slot:hours>
                                    <x-slot:rating>
                                        <x-stars value="{{$webinar->getRate()}}"/>
                                        <div class="text-dim-gray mx-2 fs-12">reviews ({{count($webinar->reviews)}})</div>
                                    </x-slot:rating>
                                </x-card.little>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-pane active" id="sessions" role="tabpanel">

                    </div>
                </x-slot:tabContent>
            </x-tabs>
        </div>
    </div>
@endsection
