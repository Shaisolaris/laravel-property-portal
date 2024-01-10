@extends('academy::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('academy.name') !!}</p>
@endsection
