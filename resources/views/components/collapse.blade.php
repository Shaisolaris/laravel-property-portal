<div class="live-preview">
    <div class="hstack gap-2 flex-wrap mb-3">
        <button
            class="btn btn-light-blue"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#{{$target}}"
            aria-expanded="false"
            aria-controls="{{$target}}"
        >
            {{trans("translation.button.collapse.$buttonText")}}
        </button>
        <button class="btn btn-primary">f</button>
        <button class="btn btn-secondary">f</button>
    </div>
    <div class="collapse" id="{{$target}}">
        {{ $text }}
    </div>
</div>