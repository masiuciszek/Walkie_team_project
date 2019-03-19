@extends('layouts.app')

@section('content')

<style>
    #user_info_container {
        text-align: center;
        width: 40vw;
        
    }
</style>

<h1>Welcome</h1>
    <div class="container">
        <div class="jumbotron" id="user_info_container">
            <div class="card">
                <div class="card-body">
                    <h3>{{$auth->first_name}} {{$auth->last_name}} </h3>
                    <p>{{$auth->user_name}}</p>
                    <p>{{$auth->email}}</p>
                    <p>{{$auth->phone_number}}</p>
                    <p>{{$auth->age}}</p>
                    <p>{{$auth->gender}}</p>
                    <a href="{{action('UserController@edit',$auth->id)}}" class="btn btn-danger">Update Profile</a>
                </div>
            </div>
        </div>
    </div>


@endsection