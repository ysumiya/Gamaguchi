@extends('layouts.app')

@section('content')
<body class="gama_back">
    <div class="welcome_mainbox">
        <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
            <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
        </svg>
        <div class="sub_title">新しいGama</div>
        <form action="/gama" method="post">
            @csrf
            <div class="register_form">
                <button class="gama_wrapper create_gama"><div class="gama create_gama">        
                    <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                        <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
                    </svg>
                    <i class="fas fa-5x fa-plus-circle"></i>
                </div></button>
                <div class="form_template">Gamaの名前
                    <input id="gama_name" type="text" name="gama_name"　placeholder="New Gama">
                </div>
                <form action="/home" method="post">
                    @csrf
                    <input type="submit" class=" bt2to1 button" value="キャンセル">
                </form>
                <input type="submit" class="gama_color bt2to1 button" value="作成">
                </form>
            </div>
    </div>
    </body>
@endsection
