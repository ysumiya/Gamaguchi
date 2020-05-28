@extends('layouts.app')

@section('content')
    <body class="gama_back">
        <div class="welcome_mainbox">
            <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
            </svg>
            <div class="sub_title">Gamaに入金する</div>
            <form action="/charge" method="post" class="charge_wallet">
                @csrf
                <div class="form_template">どこから入金する？
                    <select id="where_wallet" name="where_wallet" placeholder="入金元を選択する">
                        <option value="mygama">自分のGama</option>
                        <option value="card">クレジットカード</option>
                    </select>
                </div>
                <div class="form_template biginput">入金額(円)
                    <input id="charge_amount" type="text" name="charge_amount" placeholder="入金額を入力">
                </div>
                <input type="submit" class="gama_color bt2to1 button" value="入金"> 
            </form>
            <form action="/wallet/{{ session('gama_id') }}" method="get">
                @csrf
                <input type="submit" class="button bt2to1" value="キャンセル">
            </form>
            </div>
        </div>
    </body>
@endsection
