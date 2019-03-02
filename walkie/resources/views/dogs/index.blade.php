@extends('layouts.app')

@section('content')

<h1>DOGS</h1>

@foreach ($dogs as $dog)


<img src="{{ $dog->image }}" alt="title"/>
<br>
<h2>Name: {{ $dog->name }}</h2>
<br>
<h3>Age: {{ $dog->age }}</h2>
<br>
<h3>Sex: {{ $dog->sex }}</h2>
<br>

 <h3>Breed: {{ $dog->breed->name }}</h2>
<br>
<h3>Description: {{ $dog->description }}</h2>
    <button><a href="{{ action('DogController@show', $dog->id)}}">DETAILS</a></button>
<hr>

@endforeach

@endsection