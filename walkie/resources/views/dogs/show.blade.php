@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="text-center">
            <img class="img-fluid dog-img rounded" src="{{ $dog->image }}" alt="dog-img"/>
        </div>
    <br>
    <h2 class="dog-detail-name">Name: {{ $dog->name }}</h2>
    <br>
    <h4>Age: {{ $dog->age }}</h4>
    <br>
    @if($dog->sex === 0)

        <h4>Sex: Male</h4>
    @else
        <h4>Sex: Female</h4>
    @endif
    <br>
    <h4>Breed: {{ $dog->breed->name }}</h4>
    <br>
    <h4>Description: {{ $dog->description }}</h4>
    <hr>
    <button><a href="{{ action('DogController@index')}}">HOME</a></button>


    </div>
</div>
{{-- <style>
    [type="date"] {
      background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
    }
    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0;
    }
    
    /* custom styles */
    body {
      padding: 4em;
      background: #e5e5e5;
      font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
    }
    label {
      display: block;
    }
    input {
      border: 1px solid #c4c4c4;
      border-radius: 5px;
      background-color: #fff;
      padding: 3px 5px;
      box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
      width: 190px;
    }
    </style> --}}
    
    <h1>DATE PICKER</h1>
   
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

    <form action="{{ action('DogController@walk', $dog->id) }}" method="post">
          @csrf   
          <input type="hidden" name="dog_id" value="{{ $dog->id }}">
           <label for="walking">Choose a date for your next walk</label>
    <input type="date" name="walking" id="walking" value="{{ $date }}" onchange="reload_date(this.value)">
            <br>
      
            @foreach ($hours as $hour)
                @if (empty($hours_taken[$hour]))
                    <button type="submit" class="btn-primary" name="hour" value="{{ $hour }}">{{ $hour }}:00</button>
                @endif
            @endforeach
    
     </form>
    <script>
     function reload_date($date) {
         console.log($date);
         window.location.href = '?date=' + $date;
     }
    </script>
@endsection

