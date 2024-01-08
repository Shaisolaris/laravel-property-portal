@props(['item'])

@php
$avatars = [
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',

    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
    '/store/1015/avatar/617a4f2fb8a6d.png',
]
@endphp

<x-card.base class="card-members p-0">
    <div class="position-relative h-40px card-image">
        <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top object-fit-cover h-100"/>
        <x-card.partials.mark name="Intermediate"/>
    </div>
    <div class="card-header pb-2 border-0 d-flex justify-content-between">
        <h4 class="card-title text-black mb-0">{{ $item->title }}</h4>
        <div class="ms-3">
            <img src="/images/signal.svg" alt="signal">
        </div>
    </div>
    <div class="pt-1 px-3 text-dim-gray">
        <div>Join private mentors or live groups to learn more about this course</div>
    </div>
    <div class="card-footer pt-2 border-0 d-flex justify-content-end">
        <x-avatar-group limit="3" :avatars="$avatars"/>
    </div>
</x-card.base>
