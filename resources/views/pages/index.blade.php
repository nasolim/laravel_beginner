@extends('layout')
@section('header')
    <title>Team Page</title>
@stop

@section('content')

    <h1>This is meant to be the 'Meet the Team' page.</h1>
    @foreach ($kerbals as $kerbal)
    <div>
        <a href = "/team/{{ $kerbal->id }}"> {{ $kerbal->first_name }}</a>
    </div>
    @endforeach

@stop