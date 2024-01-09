@props(['value','simple'])

@php
    $fullStars = floor($value);
    $halfStar = $value - $fullStars > 0 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;
@endphp
<div>
    @if(!$simple)
        @for ($i = 0; $i < $fullStars; $i++)
            <i class="bx bxs-star fs-17 text-light-blue"></i>
        @endfor

        @if($halfStar)
            <i class="bx bxs-star-half fs-17 text-light-blue"></i>
        @endif

        @for ($i = 0; $i < $emptyStars; $i++)
            <i class="bx bxs-star fs-17 text-dim-gray"></i>
        @endfor
    @else
        <span class="text-black fs-20"> {{$fullStars}} </span> <i class="bx bxs-star fs-17 text-light-blue"></i>
    @endif
</div>
