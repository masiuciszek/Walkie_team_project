@extends('layouts.app')
<div id="navbar"></div>
@section('content')


<h1 class="user-title">Welcome</h1>
    <div class="container">
        @if ($auth->admin == true)
        <button class="btn btn-info text-white" {{ url('dog/create') }}>Manage the dogs</button>
        @endif

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
    <div class="container">
        <div class="jumbotron" id="user_info_container">
            <div class="card">
                <div class="card-body">
                        <h2>Previous Walks:</h2>
                        @foreach ($prevWalks as $walk)
                <p> {{ $walk->date}} - {{ $walk->hour}}:00 with {{ $walk->dog->name}}</p>
                        @endforeach


                        <h2> Next Walks:</h2>
                        @foreach ($nextWalks as $walk)
                            <p> {{ $walk->date}} - {{ $walk->hour}}:00 with {{ $walk->dog->name}}</p>
                        @endforeach

                </div>
            </div>
        </div>
    </div>

    @endsection
    <script src="{{ mix('js/Header.js') }}"></script>