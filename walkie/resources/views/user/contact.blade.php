@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
     @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
            </ul>
   </div>
@endif

@if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
@endif

    <form action=""{{action('UserController@send')}} method="post">
    @csrf
        <div class="form-group">
          <label>Your Name:</label>
          <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
        </div>
        <div class="form-group">
          <label>Your Email:</label>
          <input type="text" name="email" class="form-control" value="{{old('email')}}" />
        </div>
        <div class="form-group">
          <label>Your Phone Number:</label>
          <input type="text" name="phone" class="form-control" value="{{old('phone')}}" />
        </div>
        <div class="form-group">
          <label>Name of the chosen dog:</label>
          <select class="form-control" name="dog">
              @foreach($dogs as $dog)
                  <option value="{{ $dog->name}}"> {{ $dog->name}} </option>
              @endforeach
          </select>
      </div>
        <div class="form-group">
          <label>Why would you like to adopt this dog?</label>
          <textarea name="message" class="form-control">{{old('message')}}</textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="send" class="btn btn-info" value="Send" />
        </div>
   </form>

@endsection