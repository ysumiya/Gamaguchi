@extends('layouts.app')

@section('content')
    <?php
        session(["gama_id"=>$gama_id, "gama_name"=>$gama_name]);
    ?>

    <body class="gama_back">
        <div class="mainbox">
            <form action="/home" method="get" class="backbutton">
                @csrf
                <button type="submit" class="no_display backbutton">
                    <i class="fas fa-2x fa-angle-left"></i>
                </button>
            </form>
            <div class="sub_title">Gama詳細</div>
                <div class="gama onwallet">        
                    <svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                        <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
                    </svg>
                    <div class="gama_img"><img src={{ asset( "assets/img/gama_back.png" )}}></div>

                    <div class="gama_name">{{ $gama_name }}
                        <?php
                        if ($is_owner) {
                            echo '<div id="owner_button"></div>';
                        }
                        ?>
                    </div>
                    
                    <div class="gama_zandaka">¥{{ $sum }}</div>
                    <div class="wallet_button">
                        <form action="  " method="  " class="minibutton">
                            @csrf
                            <button class="no_display minibutton">
                                <i class="fas fa-lg fa-link whitebt"></i>
                            </button>
                        </form><form action="/payment" method="GET" class="minibutton">
                            @csrf
                            <button class="no_display minibutton">
                                <i class="fas fa-lg fa-qrcode whitebt"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="wallet_member">
                    <div class="authed_member">
                        @if ($is_owner) 
                            @foreach ($member_datas as $data) 
                                @if (!$data["member_auth_flag"])
                                    @continue;
                                @endif
                                <div class="each">
                                <div class="member_name">{{$data["member_user_name"]}} 
                                </div><div class="toggle">
                                @if ($data["member_owner_flag"])
                                    <input type="checkbox" id='{{$data["member_user_id"]}}' checked="checked">
                                @else
                                    <input type="checkbox" id='{{$data["member_user_id"]}}'>
                                @endif
                                    <label for='{{$data["member_user_id"]}}'>
                                    </label>
                                </div><hr>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="no_authed_member">

                    @if ($is_owner) 
                        @foreach ($member_datas as $data) 
                            @if ($data["member_auth_flag"])
                                @continue;
                            @endif
                            <div class="member_name">{{$data["member_user_name"]}}  
                            </div><div class="toggle"><form action="/join/auth" method="POST">
                            @csrf
                            <input type="hidden" name="user_id"  value="{{ $data['member_user_id']}}">
                            <input type="hidden" name="gama_id"  value="{{session('gama_id')}}">
                            <input type="submit" class="button google smallerbutton" value="承認">
                            </form></div><hr>

                        @endforeach
                    @endif

                    </div>
                </div>

                <div class="wallet_controller">
                    <form action="  " method="  " >
                        @csrf
                        <input class="button bt3to1" type="submit" value="決済履歴">
                    </form><br>
                    <form action="/charge" method="GET">
                        @csrf
                        <input class="button bt2to1 gama_color" type="submit" value="Gamaに入金">
                    </form><form action="/close" method="GET">
                        @csrf
                        <input class="button bt2to1 google" type="submit" value="Gamaを閉じる">
                    </form>
                </div>
        </body>
@endsection