@extends('layouts.app')


@section('content')
<?php if (count($errors) > 0) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors->all() as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="container">
    <form method="post" action="{{ action('DogController@store') }}">
        @csrf
              <h2>Add a dog</h2>
              </div>
              <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                  <label for="age">Age:</label>
              <input type="number" class="form-control" name="age" placeholder="age" value="" >
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
                              <option value="{{ $breed->id}}"> {{ $breed->name}} </option>
                            @endforeach
                          </select>
                        </div>
                </div>
              <div class="form-group">
                  <label for="description">Description: </label>
                    <textarea class="form-control" name="description" id="" rows="3"> {{old('description')}} </textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image:</label>
                      <input type="text" name="image" class="form-control" value="{{ old('image') }}">
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>

          </form>
</div>
<br>
<div>
<h2>List of all the dogs:</h2>
<ol>
  @foreach ($dogs as $dog)
<li>Name: {{ $dog->name }}, age: {{ $dog->age }}, sex: {{ $dog->sex}}, breed: {{$dog->breed->name}}
  <br>
  <button><a href="{{ action('DogController@edit', $dog->id)}}">EDIT</a></button>
<form action="{{ action('DogController@destroy', $dog->id)}}" method="POST">
  @csrf
  @method('DELETE')
 <button>DELETE</button>
</form> 
</li>  
  @endforeach
</ol>
</div>
@endsection
