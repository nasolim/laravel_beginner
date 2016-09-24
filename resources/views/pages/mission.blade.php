@extends('layout')
@section('header')
    <title>KSP Missions</title>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class=".hidden-sm">
                <div class="col-lg-2 col-md-3 col-sm-6 hidden-xs">
                    <form>
                        <div class="form-group">
                            <input type="text" name="name">
                            <textarea name="" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            @foreach($missions as $mission)
                <div class="col-lg-9  col-md-6 col-sm-6 col-xs-12 col-lg-offset-2 col-md-offset-4 col-sm-offset-6">
                    <div class="list-group">
                        <li class="list-group-item list-group-item-info">{{$mission->name}}</li>
                        <li class="list-group-item">Target: {{$mission->target}}</li>
                        <li class="list-group-item">Launch: {{$mission->launch_date}}</li>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop