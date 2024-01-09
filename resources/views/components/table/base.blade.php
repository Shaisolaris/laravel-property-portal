@php
    $classType = $type === 'rounded-tr-border' ? 'table-separate' : '';
@endphp

<x-card.base>
    {{ $filterSort ?? '' }}

    <table class="table table-nowrap table-centered align-middle {{$classType}}">
        <thead>
            <tr>
                @foreach($headItems as $item)
                    <th scope="col" class="{{!$loop->first ? $align : ''}} {{\Illuminate\Support\Str::length($variable) > 0 ? "text-$variable" : 'text-black'}}">{{ trans("translation.table.headers.$item") }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $body ?? '' }}
        </tbody>
    </table>

    {{ $pagination ?? '' }}
</x-card.base>