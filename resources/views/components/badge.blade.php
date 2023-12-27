<span {{ $attributes->merge(['class' => "badge badge-$size bg-$variable rounded-pill $type"]) }}>
    {{ trans("translation.badge.$key") }}
</span>