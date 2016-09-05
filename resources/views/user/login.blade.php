@extends('layouts.one_page')
@section('content')
    <style>
        #content {
            margin-top: 10%;
        }
    </style>

<div class="container">
    <div id="content">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="{{route("user.login")}}" method="post">
                {{csrf_field()}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Login</h2>
                    </div>
                    <div class="panel-body">

                        <div class="input-group form-group">
                            <span class="input-group-addon" id="email">@</span>
                            <input type="text" class="form-control" name="email" placeholder="Email Address" autofocus required aria-describedby="email">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="password"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required aria-describedby="password">
                        </div>
                    </div>
                    <div class="panel-footer right"><input type="submit" value="Login" class="btn btn-sm btn-primary"></div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection