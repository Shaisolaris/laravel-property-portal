@if(!in_array($type, ['radio', 'checkbox']))


@if(\Illuminate\Support\Str::length($icon) > 0)
    <label for="{{$label . 'label'}}" class="fs-12">
        {{$label}}
        @if($required)
            <span class="text-black">*</span>
        @endif
    </label>
@endif
<div @if(\Illuminate\Support\Str::length($icon) > 0) class="input-group" @endif>
    @if(\Illuminate\Support\Str::length($icon) < 1)
        <label for="{{$label . 'label'}}" class="fs-12">
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
        name="{{$name}}"
        id="{{$label . 'label'}}"
        placeholder="{{$placeholder}}"
        {{ $attributes->merge(['class' => "form-control radius-26"])}}
    >
</div>
@else
    <div class="form-check form-check-royal-blue">
        <input class="form-check-input" type="{{$type}}" id="{{$label . 'label'}}" name="{{$name}}">
        @if(\Illuminate\Support\Str::length($label) > 0)
            <label class="form-check-label text-dim-gray" for="{{$label . 'label'}}">
                {{$label}}
            </label>
        @endif
    </div>
@endif

@if(gettype($error) === 'string')
    <div class="invalid-feedback">{{ $error }}</div>
@elseif(gettype($error) === 'array')
    @foreach($error as $item)
        <div class="invalid-feedback">{{ $item }}</div>
    @endforeach
@endif
