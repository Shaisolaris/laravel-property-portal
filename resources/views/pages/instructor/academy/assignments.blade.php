@extends('layouts.detached-layout')

@section('content')
    <x-card.card-blocks-amount :items="$items" cols="col-12 col-sm-6 col-lg-3" />
    <div>

    </div>
    <div>
        @foreach($assignments as $$assignment)
            <x-card.card>
                {{$assignment}}
            </x-card.card>
        @endforeach
    </div>
@endsection
