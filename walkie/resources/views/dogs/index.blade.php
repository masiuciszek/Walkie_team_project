@extends('layouts.app')

@section('content')


<h1>DOGS</h1>

@can('admin')
<button><a href="{{ action('DogController@create')}}">ADD NEW DOG</a></button>
@endcan
<br>

<br>

@foreach ($dogs as $dog)


<img src="{{ $dog->image }}" alt="title"/>
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
    <button><a href="{{ action('DogController@show', $dog->id)}}">DETAILS</a></button>
    @can('admin')
    <button><a href="{{ action('DogController@edit', $dog->id)}}">EDIT</a></button>
    @endcan
<hr>

@endforeach
<div id="wall-container">
</div>


<script src="{{ mix('js/list-of-dogs.js') }}"></script>


@endsection