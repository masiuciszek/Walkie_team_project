@extends('layouts.app')

@section('content')

<h1>Welcome</h1>

    <h3>{{$auth->first_name}} {{$auth->last_name}} </h3>
    <a href="{{action('UserController@edit',$auth->id)}}" class="btn btn-lg btn-danger">Update Profile</a>



@endsection