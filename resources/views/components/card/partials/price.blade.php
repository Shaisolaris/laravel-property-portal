@props(['value','classes', 'discount'])

<div class="price-format fs-18 {{$classes}}">
    ${{$value}}
    @if(isset($discount))
        <span class="text-dim-gray fs-14 text-decoration-line-through">${{$discount}}</span>
    @endif
</div>
