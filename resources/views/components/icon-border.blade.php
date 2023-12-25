<span {{ $attributes->merge(['class' => "border border-gainsboro bg-white"]) }} style="padding: {{$size}}px; border-radius: {{$rounded}}px">
    @if($iconType === 'default')
        <i class="{{$icon}} align-bottom text-dim-gray fs-16"></i>
    @elseif('')
        <img src="{{$icon}}" alt height="{{$size}}" width="{{$size}}">
    @endif
</span>