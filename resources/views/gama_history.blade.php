@extends('layouts.app')

@section('content')
    <body class="gama_back">
        <div class="mainbox">
            <form action="/wallet" method="get" class="backbutton bt_right">
                @csrf
                <button type="submit" class="no_display backbutton">
                    <i class="fas fa-2x fa-angle-right"></i>
                </button>
            </form>
            <div class="sub_title">決済履歴</div>
            <div class="gama_history">
                <div class="each">
                    <div class="gama_history_date">
                        2020/05/27<span class="gama_history_name">交通費</span>
                    </div><div class="gama_history_money">
                        ¥5,200
                    </div>
                    <hr>
                </div>
                <div class="each">
                    <div class="gama_history_date">
                        2020/05/27<span class="gama_history_name">交通費</span>
                    </div><div class="gama_history_money">
                        ¥5,200
                    </div>
                    <hr>
                </div>
                <div class="each">
                    <div class="gama_history_date">
                        2020/05/27<span class="gama_history_name">交通費</span>
                    </div><div class="gama_history_money">
                        ¥5,200
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>
@endsection