<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karina Cristaldo</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Damion">
        <link rel="stylesheet" href="{{ asset('assets/sass/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/sass/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/sass/helpers.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jqte/jquery-te-1.4.0.css') }}">
    </head>
    <body>

        @include('layouts.navbar')
        @yield('content')

    </body>
</html>