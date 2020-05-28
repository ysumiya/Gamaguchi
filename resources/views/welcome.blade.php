@extends('layouts.app')

@section('content')
    <body class="gama_back">
    <div class="welcome_mainbox">
        <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
            <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
        </svg>
        <div class="welcome_gama">
            <div class="sub_title">みんなでつかえる、<br>おてがる財布。</div>
            <img src={{ asset("assets/img/gama_logo.png" )}}>　
        </div>
        <form action="/register" method="get"><input type="submit" class="gama_color button" value="メールアドレスで登録"></form>
        <form action="/login" method="get"><input type="submit" class="button" value="ログイン"></form>
        <div class="welcome_sociallogin">
            <div class="sub_title">ソーシャルアカウントでログイン</div>
            <form action="  " method="post"><button type="submit" class="bt3to1 button fb">
                <i class="fab fa-lg fa-facebook"></i></button></form>
            <form action="  " method="post"><button type="submit" class="bt3to1 button google">
                <i class="fab fa-lg fa-google"></i></button></form>
            <form action="  " method="post"><button type="submit" class="bt3to1 button line">
                <i class="fab fa-lg fa-line"></i></button></form>
        </div>
    </div>
    </body>
@endsection
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
