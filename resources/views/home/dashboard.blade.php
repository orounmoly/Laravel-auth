@extends('layouts.master')
@section('content')
    <h1>Dashboard</h1>
    <p>page text param.</p>
    {!! Form::open(array("url" => "dashboard")) !!}

    {!! Form::close() !!}
@endsection