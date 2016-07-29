@extends('layout')
@section('header')
<title>{{$kerbal->first_name}} {{$kerbal->last_name}}</title>
@stop
@section('content')
    <div class="container">
        {{--Header Area - Contains Photo and Basic Stats--}}
        <div class="row">
            {{--This first column area should have the photo--}}
            <div class = "col-lg-4  col-md-4 col-sm-6">
                        <img src="{{$kerbal->portrait}}" height="250" width="200">
            </div>
            {{-- Name--}}
            <div class = "col-lg-8 col-md-8 col-sm-6">
                <div class="row">
                        <div class="jumbotron">
                            <h2 class="display-3">{{$kerbal->first_name}} {{$kerbal->last_name}}</h2>
                        </div>
                </div>
                {{-- Info Snapshot--}}
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <h3>{{$kerbal->missions->count()}} <br>  Total Missions </h3>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <h3>{{$kerbal->missions->sum('flight_hrs')/24}}  <br>Days In Space</h3>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <h3>{{$kerbal->evas->count()}} <br> EVAs </h3>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <h3>{{$kerbal->evas->sum('hrs')}}  <br>Hours in EVA</h3>

                        </div>

                    </div>

                </div>
                </div>
        </div>
        {{--Mission Summary--}}
        <div class="row">
            @foreach ($kerbal->missions as $journey)
                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-12">
                    <div class="list-group">
                        <li class="list-group-item list-group-item-info">{{$journey->name}}</li><!-- This is going to be a link to the mission page.-->
                        <li class="list-group-item test-justify">Destination: {{$journey->target}}</li>
                        <li class="list-group-item">Launch: {{$journey->launch_date}}</li>
                        <li class="list-group-item">Returned: {{$journey->return_date}}</li>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href = "/team">Back to the Team</a>
        </div>
    </div>
@stop