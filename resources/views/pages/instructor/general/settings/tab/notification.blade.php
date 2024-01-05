@php
    $icons = [
        0 => 'ri-chat-3-line',
        1 => 'ri-function-line',
        2 => 'ri-tools-line',
        3 => 'ri-percent-line',
    ];
@endphp

@foreach(range(0, 3) as $index)
    <div class="row g-2">
        <div class="col-12">
            <x-card.base>
                <form method="POST" action="">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-dim-gray fw-medium">
                                <x-icon :iconClass="$icons[$index]" />
                                {{trans("translation.page.settings.notification.$index.title")}}
                            </div>
                            <div class="">{{trans("translation.page.settings.notification.$index.text")}}</div>
                        </div>
                        <div>
                            <x-base-switch size="lg" />
                        </div>
                    </div>
                </form>
            </x-card.base>
        </div>
    </div>
@endforeach