@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid dog-img rounded" src="{{ $dog->image }}" alt="dog-img"/>
        </div>
        <div class="col-md-6" >
            <div class="jumbotron">
                <div class="text-center">
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
            
            <h2 class="date-detail">DATE PICKER</h2>
                <br>
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
        
        
            <form action="{{ action('DogController@walk', $dog->id) }}" method="post">
                  @csrf   
                  <input type="hidden" name="dog_id" value="{{ $dog->id }}">
                   <label for="walking">Choose a date for your next walk</label>
            <input type="date" name="walking" id="walking" value="{{ $date }}" onchange="reload_date(this.value)">
                    <br>
                    <br>
                    <div class="btns-detail-container">
                    @foreach ($hours as $hour)
                        @if (empty($hours_taken[$hour]))
                            <button type="submit" class="btn-primary" name="hour" value="{{ $hour }}">{{ $hour }}:00</button>
                        @endif
                    @endforeach
                    </div>
            
             </form>
            <script>
             function reload_date($date) {
                 console.log($date);
                 window.location.href = '?date=' + $date;
             }
            </script>
        
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
           </div>
        @endif

<div class="container">

    @if( Auth::user()->walks()->where('dog_id', $dog->id)->where('date', '<=', date('Y-m-d'))->count() > 0) 
    {{-- {{ Auth::user()->walks()->where('dog_id', $dog->id)->where('date', '<=', date('Y-m-d'))->count() }} --}}
    
        <form method="post" action="{{ action('ReviewController@store', $dog->id) }}">
            @csrf 
            <label for="text">New Review:</label>
            <input type="hidden" name="dog_id" value="{{ $dog->id }}">
            <textarea name="text" class="form-control"></textarea>
            <button type="submit">Submit</button>
        </form>
    @endif
</div> 


<div class="container">
    @foreach ($reviews as $review)
        <h2> {{ $review->user->first_name}} {{ $review->user->last_name}}</h2>
        <p> {{ $review->text}} </p>

        <div class="votes">
                <span>Was this review helpful?</span> 
                
               
             
                <form action="{{action('ReviewController@vote', $review->id)}}" method="post">
                    @csrf
 
                    <button type="submit" name="up" value="+1"><i class="far fa-thumbs-up"> {{ $review->positiveVotes() }}</i></button>
                    <button type="submit" name="down" value="-1"><i class="far fa-thumbs-down"> {{ $review->negativeVotes() }}</i></button>
                </form>
            </div>

        @can('admin')
        <form action="{{ action('ReviewController@destroy', $review->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button id="btn-delete"><i class="far fa-trash-alt"></i></button> 
        </form> 
        @if ($review->approved == 0)
        <form action="{{ action('ReviewController@approved', $review->id)}}" method="POST">
                @csrf
                <button>Approve</button> 
        </form> 
        @endif
        @endcan
        <hr>
    @endforeach
   
</div>
    
</div>

@endsection

