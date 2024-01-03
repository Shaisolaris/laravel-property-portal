@props(['item'])

<x-card.card classes="card-little p-0">
    <div class="position-relative">
        <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top img-fluid"/>
        <x-card.partials.mark name="Intermediate"/>
    </div>
    <div class="card-header">
        <h4 class="card-title mb-0">{{ $item->title }}</h4>
    </div>
    <div class="card-body">
        <div class="d-flex">
            <x-stars value="3.5"/>
            <div class="text-dim-gray mx-2 fs-12">reviews (203)</div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="price">
            <x-card.partials.price value="10" classes="fs-20 font-weight-bold" discount="11.99"/>
        </div>
        <div class="time">
            <i class="las la-clock"></i>
            24:12:22
        </div>
    </div>
</x-card.card>
