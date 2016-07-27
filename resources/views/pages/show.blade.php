@extends('layout')
@section('header')
<title>{{$kerbal->first_name}} {{$kerbal->last_name}}</title>
@stop
@section('content')


     {{$kerbal->last_name}}, {{$kerbal->first_name}}
     <br>
     Total Missions: {{$kerbal->missions->count()}}
     Total Time In Space: {{$kerbal->missions->sum('flight_hrs')}}:{{$kerbal->missions->sum('flight_mins')}}
     <br>
     EVA Time: {{$kerbal->evas->sum('hrs')}}:{{$kerbal->evas->sum('mins')}}
     Total EVA's: {{$kerbal->evas->count()}}

     <ol>
         @foreach ($kerbal->missions as $journey)
             <li>Name: <a href="#">{{$journey->name}}</a></li><!-- This is going to be a link to the mission page.-->
             <ul>
                 <li>Origin: {{$journey->origin}}</li>
                 <li>Destination: {{$journey->target}}</li>
                 <li>Launch: {{$journey->launch_date}}</li>
                 <li>Returned: {{$journey->return_date}}</li>
                 <li>Hrs: {{$journey->flight_hrs}}</li>
                 <li>Mins: {{$journey->flight_mins}}</li>
             </ul>
         @endforeach
     </ol>




<a href = "/team">Back to the Team</a>
@stop