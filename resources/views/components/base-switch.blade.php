<div class="form-check form-switch{{$size ? "-$size" : ''}}" dir="ltr">
    <input
        type="checkbox"
        class="form-check-input"
        @if($label) id="{{ $label . 'label' }}" @endif
        checked=""
        name="{{$name}}"
    >

    @if($label)
        <label class="form-check-label" for="{{ $label . 'label' }}">
            {{ $label }}
        </label>
    @endif
</div>