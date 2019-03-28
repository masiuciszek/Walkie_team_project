@extends('layouts.app')
<div id="navbar"></div>


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



<div class="container-fluid">
    <div class="row">
        
        <div class="create-dog-container col-md-5 ml-5 mr-5">
            <form method="post"  action="{{ action('DogController@store') }}">
                @csrf
                    <h2>Add a dog</h2>
                    <div class="card" id="dogs-card">
                            <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control " name="name" id="name" placeholder="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control mb-2 mr-sm-2" name="age" placeholder="age" value="" >
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
                        
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <textarea class="form-control" name="description" id="" rows="3"> {{old('description')}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="text" name="image" class="form-control" value="{{ old('image') }}">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
        </div>
        
        <br>

        <div class="dogs-list-container col-md-5 ml-5">
            <h2 data-spy="scroll" >List of all the dogs:</h2>
            <div class="card" id="admin-card">
                <div class="card-body">
                    <ol>
                        @foreach ($dogs as $dog)
                            <li>Name: {{ $dog->name }}  
                                age: {{ $dog->age }} 
                                @if($dog->sex === 0)
                                    sex: male
                                    @else
                                    sex: female
                                    @endif 
                                    
                                breed: {{$dog->breed->name}}
                            <br>
                            <div class="btn-container">
                                <a href="{{ action('DogController@edit', $dog->id)}}" id="btn-edit"> <i class="fas fa-pencil-alt"></i></a>

                                <form action="{{ action('DogController@destroy', $dog->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="btn-delete"><i class="far fa-trash-alt"></i></button>
                            </div>
                            <hr>
                            </form> 
                            </li>  
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ mix('js/Header.js') }}"></script>
