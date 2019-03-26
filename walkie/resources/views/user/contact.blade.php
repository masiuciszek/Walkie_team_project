@extends('layouts.app')
<div id="navbar"></div>
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


<div class="container" id="container-contact">
  <div class="jumbotron">
      <div class="card">
        <div class="card-body">
          <h3 class="contact-title">Contact</h3>
          <form action=""{{action('UserController@send')}} method="post">
          @csrf
              <div class="form-group">
                <label>Your Name:</label>
              <input type="text" name="name" class="form-control" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}"/>
              </div>
              <div class="form-group">
                <label>Your Email:</label>
                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" />
              </div>
              <div class="form-group">
                <label>Your Phone Number:</label>
                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone_number }}" />
              </div>
              <div class="form-group">
                <label>Name of the chosen dog:</label>
                <select name="dog">
                @foreach ($dogs as $dog)
                <option value="{{ $dog->name}}"> {{ $dog->name}}</option>
                @endforeach
              </select>
              </div>
              <div class="form-group">
                <label>Why would you like to adops this dog?</label>
                <textarea name="message" class="form-control">{{old('message')}}</textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="send" class="btn btn-info" value="Send" />
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
   @endsection
   <script src="{{ mix('js/Header.js') }}"></script>