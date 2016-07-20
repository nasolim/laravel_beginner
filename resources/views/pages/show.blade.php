@extends('layout')

@section('content')


     {{$kerbal_id->last_name}}, {{$kerbal_id->first_name}}
@foreach ($kerbal_id->missioncrew as $mission)
    <ol>
        <li>{{ $mission->name }}</li>
            <ul>
            <li>Launch Date: {{ $mission->launch_date }}</li>
            <li>Return Date: {{ $mission->return_date }}</li>
            <li>Flight Time: {{ $mission->flight_hrs }}:{{ $mission->flight_mins }}:00</li>
            </ul>

    </ol>

@endforeach

<a href = "/team">Back to the Team</a>
@stop