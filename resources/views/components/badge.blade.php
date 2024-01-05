<span {{ $attributes->merge(['class' => "badge badge-$size bg-$variable rounded-pill $type"]) }}>
    @if(\Illuminate\Support\Str::length($key) > 0)
        {{ trans("translation.badge.$key") }}
    @else
        {!! $text !!}
    @endif
</span>