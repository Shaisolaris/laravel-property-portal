@if($withBg)
    <x-badge size="md" :variable="$variable" {{ $attributes }}>
        <x-slot:body>
            @if(\Illuminate\Support\Str::length($icon) > 0)
                <x-icon :icon-class="$icon" />
            @endif

            <x-text key="badge.{{$key}}" />
        </x-slot:body>
    </x-badge>
@else
    <span class="fs-12 text-{{$variable}}">
         @if(\Illuminate\Support\Str::length($icon) > 0)
            <x-icon :icon-class="$icon" />
        @endif
        <x-text key="badge.{{$key}}" />
    </span>
@endif

