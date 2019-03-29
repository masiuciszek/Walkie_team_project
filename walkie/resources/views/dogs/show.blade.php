
@extends('layouts.app')
<div id="navbar"></div>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid dog-img rounded image-dog-detail" src="{{ $dog->image }}" alt="dog-img"/>
            <br>
            <br>
            <br>
            <div class="btn-detail">
            <button class="btn btn-success btn-lg btn-adopt"><a href="{{ action('UserController@contact', $dog->id)}}">ADOPT ME</a></button>
            </div>
            <br>
            <br>
            
        </div>
        <div class="col-md-6" >
            <div class="jumbotron">
                <div class="text-center">
                </div>
            <br>
            <h1 class="dog-detail-name">{{ $dog->name }}</h1>
            <hr class="hr-dog-detail">
            {{-- <br> --}}
            @if ($dog->age === 1)
                <p class="dog-description-info">{{ $dog->age }} year old  <i class="fas fa-paw"></i>  {{ $dog->breed->name }}  <i class="fas fa-paw"></i>  
                    @if($dog->sex === 0)
                    Male
                @else
                    Female
                @endif
                </p>   
                <hr class="hr-dog-detail">     
            @else
                <p class="dog-description-info">{{ $dog->age }} years old  <i class="fas fa-paw"></i>  {{ $dog->breed->name }}  <i class="fas fa-paw"></i>  
                    @if($dog->sex === 0)
                    Male
                @else
                    Female
                @endif
                </p>  
                <hr class="hr-dog-detail">      
            @endif
            
            <p class="dog-description">{{ $dog->description }}</p>
        
            <hr class="hr-dog-detail">

            <h3 class="date-detail">Choose a date for your next walk</h3>
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


            {{-- <form action="{{ action('DogController@walk', $dog->id) }}" data-dogid="{{$dog->id}}"  method="post"> --}}
                  

                     <form action="{{ action('DogController@walk', $dog->id) }}" method="post">
                @csrf
                
                <input type="hidden" name="dog_id" value="{{ $dog->id }}">
                
                <br>
                <div class="callendar">
                    <input type="date" name="walking" id="walking" value="{{ $date }}" onchange="reload_date(this.value)">
                </div>
                <br>
                <br>
                <div class="btns-detail-container">
                @foreach ($hours as $hour)
                    @if (empty($hours_taken[$hour]))
                        <button type="submit" class="btn-primary btns-hours" name="hour" value="{{ $hour }}">{{ $hour }}:00</button>
                    @endif
                @endforeach
                </div>
             </form>
            <script>
             function reload_date($date) {
                 console.log($date);
                 window.location.href = '?date=' + $date;
             };
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
        <br>
        <div class="bones-line">
            <i class="fas fa-bone fa-4x"></i><i class="fas fa-bone fa-4x"></i><i class="fas fa-bone fa-4x"></i>
        </div>
        <br>
<div class="container">

    @if( Auth::user()->walks()->where('dog_id', $dog->id)->where('date', '<=', date('Y-m-d'))->count() > 0)

        <form method="post" class="form-review" action="{{ action('ReviewController@store', $dog->id) }}">
            @csrf
            <div class="form-group comment-form">
            {{-- <label for="text">New Review:</label> --}}
            <input type="hidden" name="dog_id" value="{{ $dog->id }}">
            <textarea name="text" class="form-control" id="comment-textarea" placeholder="Type your review here"></textarea>
            <div class="btn-flex">
            <button type="submit" class="btn btn-success btn-review">Submit</button>
            </div>
            </div>
        </form>
    @endif
</div>

<div class="container">
    @foreach ($reviews as $review)
    <div class="card review-card">
            <div class="card-body">
                    <div class="comment-top-section">
                        <div class="name-date-review">
                        <p class="review-name">{{ $review->user->first_name}} {{ $review->user->last_name}}</p>
                        <p class="review-created-at"> {{ $review->user->created_at }} </p>
                        </div>
                        @can('admin')
                        <div class="admin-btns-review">
                        <form action="{{ action('ReviewController@destroy', $review->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete" id="btn-delete"><i class="far fa-trash-alt review-trash-icon fa-2x"></i></button>
                        </form>
                        @if ($review->approved == 0)
                        <form action="{{ action('ReviewController@approved', $review->id)}}" method="POST">
                                @csrf
                                <button class="btn-accept"><i class="fas fa-check fa-2x"></i></button>
                        </form>
                        @endif
                        @endcan
                    </div>

                        </div>
                        <hr class="review-top-line">
                        <p class="review-txt"> {{ $review->text}} </p> 

        <div class="votes">
                <span class="review-info">Was this review helpful?</span>



                <form action="{{action('ReviewController@vote', $review->id)}}" method="post" data-reviewId="{{ $review->id }}">
                    @csrf

                    <div class="votes-thumbs-container">
                    <button class="btn-like btn-up" type="submit" id="up" name="up" value="+1"><i class="far fa-thumbs-up"> {{ $review->positiveVotes() }}</i></button>
                    <button class="btn-dislike  btn-down" type="submit" id="down" name="down" value="-1"><i class="far fa-thumbs-down"> {{ $review->negativeVotes() }}</i></button>
                    </div>
                </form>
            </div>


        {{-- @can('admin')
        <div class="admin-btns-review">
        <form action="{{ action('ReviewController@destroy', $review->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-delete" id="btn-delete"><i class="far fa-trash-alt review-trash-icon fa-2x"></i></button>
        </form>
        @if ($review->approved == 0)
        <form action="{{ action('ReviewController@approved', $review->id)}}" method="POST">
                @csrf
                <button class="btn-accept"><i class="fas fa-check fa-2x"></i></button>
        </form>
        </div>
        @endif
        @endcan --}}
            </div>
            </div>
        <hr class="hr-comment-line">
    @endforeach

    </div>
</div>

<script src="{{ mix('js/Header.js') }}"></script>
<script src="{{ asset('js/ajax_vanillajs.js') }}"></script>

@endsection