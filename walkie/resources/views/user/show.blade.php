@extends('layouts.app')
<div id="navbar"></div>

@section('content')
    <div class="container">

        @include('layouts.user-jumbo')

        @include('layouts.users-table')
    </div>
@endsection

<script src="{{ mix('js/Header.js') }}"></script>