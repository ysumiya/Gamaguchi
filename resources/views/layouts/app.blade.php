<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'GAMA') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type＝”text/css” href={{ asset("assets/css/style.css" )}}>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> 
        <link rel="icon" href={{ asset("assets/img/gama.ico" )}} type="image/icon type">
    </head>
        <main class="py-4">
            @yield('content')
        </main>
</html>
