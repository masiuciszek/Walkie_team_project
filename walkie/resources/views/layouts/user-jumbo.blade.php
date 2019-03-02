<div class="jumbotron bg-info text-white">
        <h1 class="display-1">Welcome</h1>
        <h2 class="display-2">{{$auth->first_name}}  {{$auth->last_name}}</h2>
        <p class="lead"> Username : {{$auth->user_name}} </p>
        <hr class="my-4">
        <p class="lead"> Email :  {{$auth->email}} </p>
        <p class="lead"> Username :  {{$auth->user_name}} </p>
        <p class="lead"> Phone : {{$auth->phone_number}} </p>
        <p class="lead"> Age : {{$auth->age}}  </p>
        <p class="lead"> Gender : {{$auth->gender}} </p>
          <a class="btn btn-warning btn-lg" href="/" role="button">View Dogs</a>
          <a class="btn btn-light btn-lg" href="{{action('UserController@edit',$user->id)}}" role="button">edit Profile</a>
        {{-- </p> --}}
      </div>