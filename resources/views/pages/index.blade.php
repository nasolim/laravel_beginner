@extends('layout')
@section('header')
    <title>Team Page</title>
@stop

@section('content')
    <div class="container"><div class="jumbotron jumbotron-fluid" align="center">
            <h1>Meet the team!</h1>
        </div>
        <div class="row" >









            @foreach ($kerbals as $kerbal)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                    <div class="card">
                        <img class="card-img-top" src="{{$kerbal->portrait}}" alt="Card image cap" height="300" width="240">
                        <div class="card-block">
                            <h4 class="card-title">{{ $kerbal->first_name }} {{ $kerbal->last_name }}</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="/team/{{ $kerbal->id }}" class="btn btn-primary">Bio</a>
                        </div>
                    </div>



                    {{--<img src="" height="200" width="160"><br>--}}
                    {{--<a href = "/team/{{ $kerbal->id }}"> {{ $kerbal->first_name }} {{ $kerbal->last_name }}</a>--}}





                </div>
            @endforeach

        </div>
    </div>

@stop