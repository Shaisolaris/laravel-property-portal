<div class="dropdown d-inline-block">
    <button
        class="btn btn-soft-secondary btn-sm dropdown"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        <i class="ri-more-fill align-middle"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end">
        @if($body)
            {!! $body !!}
        @else
            @foreach($items as $item)
                <li>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="{{$item['icon']}} align-bottom me-2 text-muted"></i>
                        {{ trans("translation." . $item['text']) }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>