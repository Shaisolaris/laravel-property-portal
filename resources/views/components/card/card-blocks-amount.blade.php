<x-card.card>
    <div class="row g-4">
        @foreach($items as $item)
            <div class="{{$cols}} text-center">
                <div class="pb-3">
                    <x-icon-border :icon="$item['icon']" />
                </div>
                <div class="text-black fs-16">{{ $item['amount'] }}</div>
                <div class="text-dim-gray fs-16">{{ trans("translation.".$item['text']) }}</div>
            </div>
        @endforeach
    </div>
</x-card.card>