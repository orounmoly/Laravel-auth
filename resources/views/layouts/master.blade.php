<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5 Authenticate</title>
    <link rel="stylesheet" href="{!! asset('libs/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/css/style.css') !!}">
    @yield('css')
</head>
<body>
    <header>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li class="pull-right"><a href="#">About</a></li>
        </ul>
    </header>
    <!--div id="wrap-header">
        <div class="brand-name"><a href="{{route('main')}}">Laravel 5 Auth</a></div>
        <div class="header-menu"><a href="{{route('main')}}" id="active">Dashboard</a></div>
        <div class="header-menu"><a href="{{route('home')}}">Home</a></div>
        <div class="header-menu"><a href="{{route('user.role')}}">User Role</a></div>
        <div class="header-menu"><a href="{{route('logout')}}" id="lginout">Logout</a></div>
        <div class="header-menu"><a href="#">| Welcome: {{Auth::user()->last_name}} {{Auth::user()->first_name}}</a></div>
    </div-->
    <div id="wrap-content">
        <div id="sidebar"></div>
        <div id="main-content">
            @yield('content')
        </div>
    </div>
    <div id="wrap-footer">

    </div>

    <script src="{!! asset('libs/js/jquery-1.11.3.js') !!}"></script>
    <script src="{!! asset('libs/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('libs/js/functions.js') !!}"></script>
    <script src="{!! asset('libs/js/scripts.js') !!}"></script>
    @yield('js')
</body>
</html>