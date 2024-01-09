@props(['id', 'reverseInputBox'])

@php
    $selector = isset($id) ? $id : $label . 'label';
    $radius = '';

    switch($size) {
        case "sm":
            $radius = 'radius-6';
            break;
        default:
            $radius = 'radius-26';
    }
@endphp

@if(!in_array($type, ['radio', 'checkbox']))
    @if(\Illuminate\Support\Str::length($icon) > 0 && \Illuminate\Support\Str::length($label) > 0)
        <label for="{{$selector}}" class="fs-12">
            {{$label}}
            @if($required)
                <span class="text-black">*</span>
            @endif
        </label>
    @endif
    <div @if(\Illuminate\Support\Str::length($icon) > 0) class="input-group" @endif>
        @if(\Illuminate\Support\Str::length($icon) < 1 && \Illuminate\Support\Str::length($label) > 0)
            <label for="{{$selector}}" class="fs-12">
                {{$label}}
                @if($required)
                    <span class="text-black">*</span>
                @endif
            </label>
        @endif

        @if(\Illuminate\Support\Str::length($icon) > 0)
            <span class="input-group-text {{ \Illuminate\Support\Str::length($size) > 0 ? "input-group-text-$size" : $size }}">
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
            id="{{$selector}}"
            placeholder="{{$placeholder}}"
            {{ $attributes->merge(['class' => "form-control $radius"])}}
        >
    </div>
@else
    <div class="form-check form-check-royal-blue @if($reverseInputBox) justify-content-between @endif">
        @if(!$reverseInputBox)
            <input class="form-check-input" type="{{$type}}" id="{{$selector}}" name="{{$name}}">
        @endif
        @if(\Illuminate\Support\Str::length($label) > 0)
            <label class="form-check-label text-dim-gray" for="{{$selector}}">
                {{$label}}
            </label>
        @endif
        @if($reverseInputBox)
            <input class="form-check-input" type="{{$type}}" id="{{$selector}}" name="{{$name}}">
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
