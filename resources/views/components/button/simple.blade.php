@if(\Illuminate\Support\Str::length($href) > 0)
    <a href="{{$href}}">
        <button
            type="{{$type}}"
            style="outline: none; border: none; background: white;" {{ $attributes->merge(['class' => "text-royal-blue"]) }}>
            @if(\Illuminate\Support\Str::length($icon))
                <i class="{{$icon}} align-bottom fs-16"></i>
            @endif

            @if(\Illuminate\Support\Str::length($key))
                <x-text key="button.{{$key}}" />
            @endif
        </button>
    </a>
@else
        <button
            type="{{$type}}"
            style="outline: none; border: none; background: white;" {{ $attributes->merge(['class' => "text-royal-blue"]) }}>
                @if(\Illuminate\Support\Str::length($icon))
                        <i class="{{$icon}} align-bottom fs-16"></i>
                @endif

                @if(\Illuminate\Support\Str::length($key))
                        <x-text key="button.{{$key}}" />
                @endif
        </button>
@endif
