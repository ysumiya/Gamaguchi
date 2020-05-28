@extends('layouts.app')

@section('content')
    <body class="gama_back">
            <div class="welcome_mainbox">
                <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                    <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
                </svg>
                <div class="sub_title">Gamaの招待</div>
                    <div class="register_form">
                        <div class="gama copygama">        
                            <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                                <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
                            </svg>
                            <div class="gama_img"><img src="assets/img/wanima.jpg"></div>
                        </div>
                        <div class="join_text">{{ $user_name }}さんから<br><strong>「{{ $gama_name }}」</strong>に<br>招待されています。</div>
                        <form action="/home" method="get">
                            @csrf
                            <input type="submit" class="button bt2to1" value="参加しない">
                        </form><form action="/join" method="post">
                            @csrf
                            <input type="submit" class="button bt2to1 gama_color" value="参加する">
                        </form>
                    </div>
            </div>
    </body>
@endsection
