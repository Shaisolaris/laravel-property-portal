<button type="{{ $type }}" {{ $attributes->merge(['class' => "btn btn-$variable"]) }}>
    @if($viewType === 'icon-left' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif

    {{ $text }}

    @if($viewType === 'icon-right' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif
</button>