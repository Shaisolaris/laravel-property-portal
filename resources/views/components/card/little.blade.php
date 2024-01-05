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
            {{$rating}}
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="price">
            {{$price}}
        </div>
        <div class="time">
            <i class="las la-clock"></i>
            {{$hours}}
        </div>
    </div>
</x-card.card>
