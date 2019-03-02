@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p class="lead">welcome </p>

                    <a href="{{url('/user')}}" class="btn btn-info">To the page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
