@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'course.total', 'icon' => 'mdi mdi-file-chart', 'amount' => 2],
       ['text' => 'course.hours', 'icon' => 'mdi mdi-file-clock', 'amount' => $hours],
       ['text' => 'course.total-sale', 'icon' => 'mdi mdi-file-check', 'amount' => $purchasedCount],
       ['text' => 'course.earned', 'icon' => 'mdi mdi-file-remove', 'amount' => $upComing]
    ];

    $tabNavigation = [
        [ 'title' => 'published', 'active' => true ],
        [ 'title' => 'draft', 'active' => false ]
    ]
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="course">
        <x-slot:rightSide>
            <x-button.base varible="light-blue" key="add-new" />
        </x-slot:rightSide>
    </x-breadcrumbs>
@endsection

@section('content')
    <x-card.blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />
    <div>
        <x-tabs :tabNavItems="$tabNavigation">
            <x-slot:advanceAction>
                <div class="d-flex justify-content-between row_gap_20 flex-sm-row flex-column-reverse align-items-center w-100 mb-2">
                    <div class="listTabing d-flex gap-2">
                        <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                            <div class="listing">
                                <img src="/design/img/courseList/list.svg"/>
                            </div>
                        </a>
                        <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                            <div class="categoriesGrid">
                                <img src="/design/img/courseList/grid.svg"/>
                            </div>
                        </a>
                        <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                            <div class="categoriesGrid">
                                <img src="/design/img/courseList/refresh.svg"/>
                            </div>
                        </a>
                    </div>
                </div>
            </x-slot:advanceAction>
            <x-slot:tabContent>
                <div class="tab-pane active" id="published" role="tabpanel">
                    <div>
                        @foreach($sales as $sale)
                            @php $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle; @endphp
                            <x-card.advance :item="$item">
                                <x-slot:number_name>Sales</x-slot:number_name>
                                <x-slot:number>{{$item->sales_count}}</x-slot:number>
                                <x-slot:lecture>8/24 lectures</x-slot:lecture>
                                <x-slot:section>1/6 sections</x-slot:section>
                                <x-slot:time>16/47m</x-slot:time>
                            </x-card.advance>
                        @endforeach

                        {{--@foreach($sales as $sale)
                            @php $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle; @endphp
                            <x-card.simple :item="$item"/>
                        @endforeach--}}

                        {{-- <div class="row">
                             @foreach($sales as $sale)
                                 <div class="col-sm-6 col-xl-4">
                                     @php $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle; @endphp
                                     <x-card.little :item="$item"/>
                                 </div>
                             @endforeach
                         </div>--}}

                        {{--<div class="row">
                            @foreach($sales as $sale)
                                <div class="col-sm-6 col-xl-4">
                                    @php $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle; @endphp
                                    <x-card.members :item="$item"/>
                                </div>
                            @endforeach
                        </div>--}}
                    </div>
                </div>
                <div class="tab-pane" id="draft" role="tabpanel">
                    <div>

                    </div>
                </div>
            </x-slot:tabContent>
        </x-tabs>
    </div>
@endsection
