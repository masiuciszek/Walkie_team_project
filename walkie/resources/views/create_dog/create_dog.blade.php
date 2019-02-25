{{-- 
{!! Form::open(['url' => '/', 'method' => 'post']) !!}

<div class="form-group">

    {{ Form::label('breed_id', 'Breed')}}
    {{ Form::select('breed_id', $breeds, ['class' => 'form-control', 'placeholder' => 'Breed', 'required']) }} 
    
    {{ Form::label('name', 'Name')}}
    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'required']) }} 
    
    {{ Form::label('age', 'Age')}}
    {{ Form::number('age', '', ['class' => 'form-control', 'placeholder' => 'Age', 'required'])}}

    {{ Form::label('sex', 'Sex')}}
    {{ Form::select('sex', [true => 'Male', false => 'Female'], ['class' => 'form-control', 'placeholder' => 'Sex', 'required']) }} 
    
    {{ Form::label('description', 'Description')}}
    {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description of a dog', 'required'])}}



    {{ Form::submit('Create!', ['class' => 'btn btn-success']) }}
    </div>
    {!! Form::close() !!}
</div> --}}

<div class="container">
    <form method="post" action="/">
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

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>

          </form>
</div>