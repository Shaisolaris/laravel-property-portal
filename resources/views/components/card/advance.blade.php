@props(['item'])

<x-card.card classes="p-0">
    <div class="row g-0 position-relative h-25">
        <div class="col-md-5">
            <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="rounded-start img-fluid"/>
        </div>
        <div class="col-md-7 p-4 d-flex align-items-center">
            <div class="position-absolute end-0 top-0 me-4 mt-4 cursor-pointer">
                <i class="las la-ellipsis-h fs-20"></i>
            </div>
            <div>
                <a href="{{ route('instructor.academy.courses.detail',['slug' => $item->slug]) }}">
                    <h2 class="card-title fw-bold mb-3">{{ $item->title }}</h2>
                </a>
                <div class="d-flex">
                    <x-stars value="3.5"/>
                    <div class="text-dim-gray mx-2 fs-12">(203)</div>
                </div>
                <div class="mt-3">
                    <x-card.partials.price value="13"/>
                </div>
                <div class="mt-3 d-flex gap-5">
                    <div>
                        <div class="text-dim-gray">item ID:</div>
                        <div class="text-black fw-bold fs-16 mb-3">{{$item->id}}</div>
                    </div>
                    <div>
                        <div class="text-dim-gray">Category:</div>
                        <div class="text-black fw-bold fs-16 mb-3">{{$item->category->title}}</div>
                    </div>
                    <div>
                        <div class="text-dim-gray">{{$number_name}}:</div>
                        <div class="text-black fw-bold fs-16 mb-3">{{$number}}</div>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    @if(isset($lecture))
                        <x-card.partials.info name="{{$lecture}}" icon="las la-comment"/>
                    @endif
                    @if(isset($section))
                        <x-card.partials.info name="{{$section}}" icon="las la-list-ol"/>
                    @endif
                    @if(isset($time))
                        <x-card.partials.info name="{{$time}}" icon="las la-clock"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-card.card>
