<div>
    @if(\Illuminate\Support\Str::length($label) > 0)
        <label class="form-check-label" for="{{$label . 'label'}}">
            {{$label}}
            @if($required)
                <span class="text-black">*</span>
            @endif
        </label>
    @endif
    <textarea
        id="{{$label . 'label'}}"
        placeholder="{{$placeholder}}"
        {{ $attributes->merge(['class' => "form-control radius-26"])}}
    ></textarea>
</div>
