@props(['item'])

<x-card.card classes="card-simple">
    <div class="row g-0 position-relative h-25">
        <div class="col-md-3">
            <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="rounded-2 img-fluid h-100 object-fit-cover"/>
        </div>
        <div class="col-md-9 p-4 d-flex justify-content-center flex-column">
            <a href="{{ route('instructor.academy.courses.detail',['slug' => $item->slug]) }}">
                <h2 class="card-title fw-bold mb-3 fs-20 font-weight-bold">{{ $item->title }}</h2>
            </a>
            <div class="mt-3">
{{--                {{$item->description}}--}}
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque corporis culpa cupiditate debitis dolores doloribus dolorum, eius est harum incidunt officia perspiciatis quae, quis repellendus repudiandae ullam unde?
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex gap-3">
                    <x-card.partials.info name="8 Course Completed" icon="mdi mdi-check-circle-outline"/>
                    <x-card.partials.info name="250 Sessions Completed" icon="mdi mdi-check-circle-outline"/>
                </div>
                <div>
                    <x-button key="get_in_touch"
                              icon="ri-send-plane-fill"
                              viewType="icon-right"
                              class="px-3 py-2 card-simple_link"/>
                </div>
            </div>
        </div>
    </div>
</x-card.card>
