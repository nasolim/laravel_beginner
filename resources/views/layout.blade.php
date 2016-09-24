<!DOCTYPE html>
<html>
<head>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
 {{--//#800202 red #E6C300 yellow  52808B blusih green #D6D8BC beigh olive/--}}
        @yield('header')

</head>
<body>
    {{--<div class="container">--}}
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SASS with Bootswatch - 2015</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Welcome Page</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/team">Teams</a></li>
                                <li><a href="/missions">Missions</a></li>
                                <li><a href="#">Crafts</a></li>
                                <li><a href="#">Program Stats</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <script src="/js/app.js"></script>

    {{--</div>--}}
    <div class="container">
        @yield('content')
        @yield('footer')
    </div>

</body>
</html>