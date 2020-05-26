@extends('layouts.app')

@section('content')
<body class="gama_back">
    <div class="welcome_mainbox">
        <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
            <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
        </svg>
        <div class="sub_title">ログイン</div>
        <form action="  " method="post">
        @csrf
            <div class="register_form_login">
                <div class="form_template">メールアドレス
                    <input id="email" type="text" name="email"　placeholder="メールアドレス">
                </div>
                <div class="form_template">パスワード
                    <input id="password" type="text" name="password"　placeholder="パスワード">
                </div>
                <input type="submit" class="gama_color bt2to1 button" value="ログイン">
            </div>
        </form> 
    </div>
    </body>
@endsection
