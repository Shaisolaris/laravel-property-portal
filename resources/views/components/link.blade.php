<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => "link-$variable"]) }}
    {{ $attributes }}
>
    {{ $text }}
</a>