@props(['value','classes', 'discount'])

@php
    if(isset($discount)) {
        $value = (int)str_replace('$','',$value); // TODO::
    }
    if(isset($discount)) {
        $discount = (int)str_replace('$','',$discount); // TODO::
    }
@endphp

<div class="price-format fs-18 {{$classes}}">
    @if($value > 0 || $discount > 0)
        ${{$value}}
        @if(isset($discount) && !empty($discount))
            <span class="text-dim-gray fs-14 text-decoration-line-through">${{$discount}}</span>
        @endif
    @else
        Free
    @endif
</div>
