@extends('layout')
@section('header')
<title>{{$kerbal->first_name}} {{$kerbal->last_name}}</title>
@stop
@section('content')


     {{$kerbal->last_name}}, {{$kerbal->first_name}}


     <ol>
         @foreach ($kerbal->missions as $journey)
             <li>Mission ID: {{$journey->name}}</li><!-- This is going to be a link to the mission page.-->
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


     <ol>
     @foreach ($kerbal->evas as $eva)
             <li>Mission ID: {{$eva->mission_id}}</li>
             <ul>
         <li>Hrs: {{$eva->hrs}}</li>
         <li>Mins: {{$eva->mins}}</li>
        </ul>
     @endforeach
     </ol>


<a href = "/team">Back to the Team</a>
@stop