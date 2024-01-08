@extends('layouts.detached-layout')

@php
    $items = [
       ['text' => 'block-amount.payment.total-students', 'icon' => 'ri-group-fill', 'amount' => 1],
       ['text' => 'block-amount.payment.courses-sale', 'icon' => 'bx bx-bar-chart-alt', 'amount' => 2],
       ['text' => 'block-amount.payment.one-on-one-sessions ', 'icon' => 'ri-customer-service-fill', 'amount' => 3],
       ['text' => 'block-amount.payment.total-earning', 'icon' => 'ri-money-dollar-circle-line', 'amount' => 4]
    ];
@endphp

@section('breadcrumbs')
    <x-breadcrumbs title="sales-report" />
@endsection

@section('content')
    <x-card.blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />

    <x-tabs :tab-nav-items="[[ 'title' => 'payment', 'active' => true ], [ 'title' => 'history', 'active' => false ]]">
        <x-slot:tabContent>
            <div class="tab-pane active col-12 col-md-8" id="payment" role="tabpanel">
                @foreach(range(0, 3) as $index)
                    <x-card.base>
                        <div class="row">
                            <div class="col">1</div>
                            <div class="col">2</div>
                            <div class="col">3</div>
                            <div class="col text-end">4</div>
                        </div>
                    </x-card.base>
                @endforeach
            </div>

            <div class="tab-pane col-12 col-md-8" id="history" role="tabpanel">
                history
            </div>
        </x-slot:tabContent>
    </x-tabs>
@endsection