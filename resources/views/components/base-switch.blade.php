<div class="form-check form-switch {{ $size ? "form-switch-$size" : '' }}" dir="ltr">
    <input
        @if($label) id="{{ $label . 'label' }}" @endif
        @if($checked) checked @endif
        type="checkbox"
        class="form-check-input"
        name="{{$name}}"
    >

    @if($label)
        <label class="form-check-label" for="{{ $label . 'label' }}">
            {{ $label }}
        </label>
    @endif
</div>