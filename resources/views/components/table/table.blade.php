<x-card.card>
    {{ $filterSort ?? '' }}

    <table class="table table-nowrap table-centered align-middle {{$type === 'rounded-tr-border' ? 'table-separate' : ''}} ">
        <thead class="text-black">
            <tr>
                @foreach($headItems as $item)
                    <th scope="col">{{ trans("translation.table.headers.$item") }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $body ?? '' }}
        </tbody>
    </table>

    {{ $pagination ?? '' }}
</x-card.card>