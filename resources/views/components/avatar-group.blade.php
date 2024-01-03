@php
    $count = count($avatars);

    if($count > $limit) {
        $plusAmount = $count - $limit;
        $avatars = array_slice($avatars, 0, $limit);
    }
@endphp

<div class="avatar-group">
    @foreach($avatars as $avatar)
        <span
            class="avatar-group-item"
            data-bs-toggle="tooltip"
            data-bs-trigger="hover"
            data-bs-placement="top"
        >
        <div class="avatar-sm">
            <img src="{{ $avatar }}" class="rounded-circle img-fluid" alt>
        </div>
    </span>
    @endforeach
    @if($count >= $limit)
        <a
            href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
            data-bs-trigger="hover" data-bs-placement="top" title="Add Members"
        >
            <div class="avatar-sm">
                <div class="avatar-title fs-16 rounded-circle bg-white text-black shadow-light-black fw-medium">
                    {{ "+$plusAmount" }}
                </div>
            </div>
        </a>
    @endif
</div>
