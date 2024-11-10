<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0;font-family: 'Nunito', sans-serif;}
        </style>
    </head>
    <body class="antialiased">
        @extends('layout')

        @section('content')
            <div class="home-content">
                <h1>Welcome to the Home Page!</h1>
            </div>
        @endsection
    </body>
</html>