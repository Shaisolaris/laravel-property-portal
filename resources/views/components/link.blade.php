<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => "link-$variable fs-14"]) }}
    {{ $attributes }}
>
    @if(\Illuminate\Support\Str::length($icon) > 0)
        <x-partial-icon :icon="$icon" class="fs-16" />
    @endif

    {{ trans("translation.link.$key") }}
</a>
