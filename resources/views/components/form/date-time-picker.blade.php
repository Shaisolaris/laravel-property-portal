<div>
    @if(\Illuminate\Support\Str::length($label) > 0)
        <label for="{{$label . 'label'}}" class="fs-12">
            {{$label}}
            @if(isset($required))
                <span class="text-black">*</span>
            @endif
        </label>
    @endif
    <div @if(\Illuminate\Support\Str::length($icon) > 0) class="input-group" @endif>
        @if(\Illuminate\Support\Str::length($icon) > 0)
            <span class="input-group-text">
                @if(\Illuminate\Support\Str::contains($icon, ['ri-', 'bx bx-', 'mdi-', 'lab la-', 'las la-']))
                    <i class="{{$icon}} align-bottom"></i>
                @else
                    {{ $icon }}
                @endif
            </span>
        @endif
        <input
            type="text"
            id="{{$label . 'label'}}"
            data-provider="flatpickr"
            data-date-format="d M, Y"
            placeholder="{{isset($placeholder) ? $placeholder : ''}}"
            {{ $attributes->merge(['class' => "form-control radius-26"])}}
        >
    </div>
</div>
