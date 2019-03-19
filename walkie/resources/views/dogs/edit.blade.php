@extends('layouts.app')


@section('content')

<div class="container">
    <div class="jumbotron">
        <div class="card">
        <div class="card-body">
    <form method="post" action="{{ action('DogController@update', $dog->id) }}">
        @csrf
        {{ method_field('PUT')}}
        <h2>Edit a dog</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name', $dog->name) }}">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" name="age" placeholder="age" value="{{ old('age', $dog->age) }}" >
        </div>
        <div class="form-group">
            <label for="sex">Sex:</label>
            <select name="sex" id="sex">
                <option value="0">Male</option>
                <option value="1">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="breed_id">Breed:</label>
            <select class="form-control" name="breed_id">
                @foreach($breeds as $breed)
                    <option value="{{ $breed->id }}"> {{ $breed->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea class="form-control" name="description" id="" rows="3"> {{ old('description', $dog->description) }} </textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
                <input type="text" name="image" class="form-control" value="{{ old('image', $dog->image) }}">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</div>
</div>


@endsection
