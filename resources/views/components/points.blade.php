<div class="d-flex d-inline-block">
    @foreach(range(1, $amount) as $index)
        <div class="{{!$loop->last ? 'me-1' : ''}} d-inline-block">
            <div class="bg-{{$bgColor}} rounded-pill d-inline-block wp-8 hp-8"></div>
        </div>
    @endforeach
</div>
