<div class="accordion">
    @php
        $randString = \Illuminate\Support\Str::random(5);
    @endphp
    @foreach($items as $item)
        <div class="accordion-item" id="{{$randString}}">
            <h2 class="accordion-header" id="heading-{{ $loop->index }}">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse{{$loop->index}}"
                    aria-expanded="true"
                    aria-controls="collapse{{$loop->index}}"
                >
                    {{ $item['title'] }}
                </button>
            </h2>
            <div
                id="collapse{{$loop->index}}"
                class="accordion-collapse collapse"
                aria-labelledby="heading-{{ $loop->index }}"
                data-bs-parent="#{{$randString}}"
            >
                <div class="accordion-body">
                    {{ $item['text'] }}
                </div>
            </div>
        </div>
    @endforeach
</div>