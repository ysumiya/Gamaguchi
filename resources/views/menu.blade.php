@extends('layouts.app')

@section('content')
    <body class="gama_back">
        <div class="welcome_mainbox">
            <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
            </svg>
            <div class="sub_title">プロフィール・設定</div>
            <form action="/home" method="get" class="backbutton bt_right">
            @csrf
                <button type="submit" class="no_display backbutton">
                    <i class="fas fa-2x fa-times-circle"></i>
                </button>
            </form>
            <div class="mywallet gama">
                <div class="mywallet_icon">
                    <img src={{ asset( "assets/img/wanima.jpg" ) }}>
                </div><div class="mywallet_name">
                    <span class="big">{{ $user_name }}</span><br><span class="small">myGama残高</span> :<strong>¥{{$sum}}</strong>
                </div>
            </div>
            <form action="/home" method="get">
                @csrf
                <input type="submit" class="button bt2to1" value="口座設定">
            </form><form action="/home" method="get">
                @csrf
                <input type="submit" class="button bt2to1" value="アカウント">
            </form>
            <form action="/home" method="get">
                @csrf
                <input type="submit" class="button" value="プロフィール設定">
            </form><form action="/logout" method="POST">
                @csrf
                <input type="submit" class="button google" value="ログアウト">
            </form>
        </div>
    </body>
@endsection