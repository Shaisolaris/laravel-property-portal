<span {{ $attributes->merge(['class' => "border border-gainsboro bg-white"]) }} style="padding: {{$size}}px; border-radius: {{$rounded}}px">
    @if($iconType === 'default')
        <i class="{{$icon}} align-middle text-dim-gray fs-18"></i>
    @elseif('')
        <img src="{{$icon}}" alt height="{{$size}}" width="{{$size}}">
    @endif
</span>