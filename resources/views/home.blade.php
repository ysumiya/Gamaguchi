@extends('layouts.app')

@section('content')
<body class="gama_back">
        <div class="mainbox">
            <div class="user_box">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="no_display"><div class="icon home"><img src={{ asset("assets/img/wanima.jpg" ) }}></div></button>
                </form>
                <div class="zandaka"><span>¥5,000</span></div>
            </div>


            <div class="gama_list">

            <?php
            foreach ($data as $datas) {
            
                echo '<button class="gama_wrapper"><div class="gama">';

                if($gama_owner_flag == 1){
                    echo '<svg class="gamacap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.29 83.84">
                        <path d="M216.51,68.84,184.22,36.56A25,25,0,0,0,140.15,13a25,25,0,0,0-44.08,23.6L63.79,68.84H15a15,15,0,0,0-15,15H70l36.67-36.67A25,25,0,0,0,140.15,37a25,25,0,0,0,33.47,10.13l36.67,36.67h70a15,15,0,0,0-15-15Z"/>
                    </svg>';
                }        

                echo'<div class="gama_img"><img src={{ asset("assets/img/wanima.jpg" ) }}></div>
                <div class="gama_name">'.$gama_name.'<div id="owner_button"></div></div>
                <div class="gama_zandaka">'.$gama_sum.'</div>

                </div></button>';
            
            }
            ?>

            </div>

            <form action="/gama_create" method="GET">
            @csrf
                <button class="button gama_color home_plus" type="submit"><i class="fas fa-lg fa-plus"></i></button>
            </form>
        </div>
        </body>
@endsection
