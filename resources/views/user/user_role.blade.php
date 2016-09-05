@extends('layouts.master')
@section('content')
    <div class="container">
        @if(isset($users))
            <table class="table table-response table-bordered">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    @if(isset($roles))
                        @foreach($roles as $role)
                            <th>{{$role->name}}</th>
                        @endforeach
                        <th style="border:none !important;"></th>
                    @endif

                </tr>
                @foreach($users as $user)
                    <tr>
                        <form action="{{route("role.assign")}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            @foreach($roles as $role)
                                <td style="text-align: center; min-width: 30px !important; width: 50px !important; max-width: 100px !important;">
                                    <input type="checkbox" name="ch-{{$role->name}}" {{$user->hasRole($role->name) ? "checked" : ""}}>
                                </td>
                            @endforeach
                            <td style="text-align: center;"><input style="width: 100% !important;" class="btn btn-xs btn-success" type="submit" value="Assign Role"></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection