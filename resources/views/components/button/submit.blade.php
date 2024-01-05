<button type="submit" style="outline: none; border: none; background: white;" class="text-royal-blue">
    @if(\Illuminate\Support\Str::length($icon))
        <i class="{{$icon}} align-bottom fs-16"></i>
    @endif

    @if(\Illuminate\Support\Str::length($key))
        <x-text key="button.{{$key}}" />
    @endif
</button>