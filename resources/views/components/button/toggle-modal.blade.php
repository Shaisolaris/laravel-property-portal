<button
    type="button"
    data-bs-toggle="modal"
    data-bs-target="{{$target}}"
    {{ $attributes->merge(['class' => "btn btn-$variable"]) }}
>
    @if($viewType === 'icon-left' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif

    {{ trans("translation.button-toggle-modal.$key") }}

    @if($viewType === 'icon-right' && strlen($icon) > 0)
        <i class="{{$icon}} align-bottom me-1"></i>
    @endif
</button>
