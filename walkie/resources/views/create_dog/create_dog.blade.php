
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
</div>

