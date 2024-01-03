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

<x-card.card classes="card-members p-0">
    <div class="position-relative">
        <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top img-fluid"/>
        <x-card.partials.mark name="Intermediate"/>
    </div>
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">{{ $item->title }}</h4>
        <div class="ms-3">
            <img src="/images/signal.svg" alt="signal">
        </div>
    </div>
    <div class="card-body">
        <div>Join private mentors or live groups to learn more about this course</div>
    </div>
    <div class="card-footer d-flex justify-content-end">
        <x-avatar-group limit="3" :avatars="$avatars"/>
    </div>
</x-card.card>
