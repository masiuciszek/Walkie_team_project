
{{-- @extends('layouts.app') --}}







<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    <link href="{{ mix('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
            <div id="home"></div>
            <script src="{{ mix('js/Home.js') }}"></script>

    </body>
</html>
