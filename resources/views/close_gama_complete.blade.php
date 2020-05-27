@extends('layouts.app')

@section('content')
    <body class="gama_back">
        <div class="welcome_mainbox">
            <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
            </svg>
            <div class="sub_title">Gamaを閉じる</div>
                <div class="close_gama_complete">
                    <div class="sub_title">Gamaを閉じました。<br><strong>¥11,880</strong>が返金されました。‬</div>
                    <form action="/home" method="get">
                        @csrf
                        <input type="submit" class="button bt2to1 gama_color" value="ホームに戻る">
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection