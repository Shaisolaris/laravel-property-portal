<button {{ $attributes->merge(['class' => "btn btn-$variable"]) }} @if($disabled) disabled @endif>
    @if($viewType === 'icon-left' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif

    <a href="{{$href}}" class="text-black">
        {{ trans("translation.button.$key") }}
    </a>

    @if($viewType === 'icon-right' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif
</button>
