@props(['item'])

<x-card.base class="card-little p-0">
    <div class="position-relative card-image">
        <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top object-fit-cover h-100"/>
        <x-card.partials.mark name="Intermediate"/>
    </div>
    <div class="card-header pb-2 border-0">
        <h4 class="card-title text-black mb-0">{{ $item->title }}</h4>
    </div>
    <div class="pt-1 px-3">
        <div class="d-flex">
            {{$rating}}
        </div>
    </div>
    <div class="card-footer pt-2 border-0 d-flex justify-content-between align-items-center">
        <div class="price">
            {{$price}}
        </div>
        <div class="time">
            <i class="las la-clock"></i>
            {{$hours}}
        </div>
    </div>
</x-card.base>
