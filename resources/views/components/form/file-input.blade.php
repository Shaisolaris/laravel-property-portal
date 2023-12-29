@php $id = $label . 'label'; @endphp

@if(\Illuminate\Support\Str::length($icon) > 0)
    <label for="{{$id}}" class="fs-12">
        {{$label}}
        @if($required)
            <span class="text-black">*</span>
        @endif
    </label>
@endif

<div @if(\Illuminate\Support\Str::length($icon) > 0) class="input-group" @endif>

    @if(\Illuminate\Support\Str::length($icon) < 1)
        <label for="{{$id}}" class="fs-12">
            {{$label}}
            @if($required)
                <span class="text-black">*</span>
            @endif
        </label>
    @endif

    @if(\Illuminate\Support\Str::length($icon) > 0)
        <label class="input-group-text cursor-pointer" for="{{$id}}">
            <x-partial-icon :icon="$icon" />
        </label>
    @endif

    <label
        for="{{$id}}"
        id="window_name"
        {{ $attributes->merge(['class' => "form-control radius-26 cursor-pointer"])}}>
        Upload {{$isMultiple ? 'files' : 'file'}}
    </label>

    <input
        name="{{$name}}"
        hidden
        type="file"
        id="{{$id}}"
        @required($required)
        @if($isMultiple) multiple @endif
    >
</div>

<script>
    const fileInput = document.getElementById("{{$id}}")
    const windowName = document.getElementById('window_name')

    fileInput.addEventListener('change', function (e) {
        windowName.innerText = e.target.value.replace(/C:\\fakepath\\/, '');
    });

</script>
