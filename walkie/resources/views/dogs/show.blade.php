@extends('layouts.app')

@section('content')

<img src="{{ $dog->image }}" alt="dog-img"/>
<br>
<h2>Name: {{ $dog->name }}</h2>
<br>
<h3>Age: {{ $dog->age }}</h2>
<br>
@if($dog->sex === 0)

    <h3>Sex: Male</h2>
@else
    <h3>Sex: Female</h3>
@endif
<br>
<h3>Breed: {{ $dog->breed->name }}</h2>
<br>
<h3>Description: {{ $dog->description }}</h2>
<hr>
<button><a href="{{ action('DogController@index')}}">HOME</a></button>

@endsection
