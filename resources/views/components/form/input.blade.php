@if(\Illuminate\Support\Str::length($icon) > 0)
    <label for="{{$label . 'label'}}" class="form-label">
        {{$label}}
        @if($required)
            <span class="text-black">*</span>
        @endif
    </label>
@endif
<div @if(\Illuminate\Support\Str::length($icon) > 0) class="input-group" @endif>
    @if(\Illuminate\Support\Str::length($icon) < 1)
        <label for="{{$label . 'label'}}" class="form-label">
            {{$label}}
            @if($required)
                <span class="text-black">*</span>
            @endif
        </label>
    @endif

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
        type="{{$type}}"
        id="{{$label . 'label'}}"
        placeholder="{{$placeholder}}"
        {{ $attributes->merge(['class' => "form-control radius-26"])}}
    >
</div>

@if(gettype($error) === 'string')
    <div class="invalid-feedback">{{ $error }}</div>
@elseif(gettype($error) === 'array')
    @foreach($error as $item)
        <div class="invalid-feedback">{{ $item }}</div>
    @endforeach
@endif

<style lang="scss">
    .input-group-text {
        padding: 13px 18px;
        background-color: white;
        border-radius: 30px 0 0 30px;
        color: black;
    }
</style>