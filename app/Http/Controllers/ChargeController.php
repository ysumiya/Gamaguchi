<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GamaLog;
use App\PersonalLog;
use App\Gama;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChargeController extends Controller
{
    //
    public function index (Request $request){
        // return view("charge", ["id"=>$id]);
        return view("charge");
    }

    public function insert(Request $request) {
        $gama_id = session("gama_id");
        $gama_name = session("gama_name");
        $user_id = Auth::id();
        $amount = $request["charge_amount"];
        $gama_log = GamaLog::create(["gama_id"=>$gama_id, "user_id"=>$user_id, "amount"=>$amount, "inc_dec_flag"=>1, "source"=>"入金"]);
        $personal_log = PersonalLog::create(["user_id"=>$user_id, "amount"=>-$amount, "inc_dec_flag"=>0, "source"=>"チャージ"]);

        $gama = Gama::find($gama_id);
        $current_gama_sum = $gama->sum;
        $new_gama_sum = $current_gama_sum + $amount;
        $gama->sum = $new_gama_sum;
        $gama->save();

        $user = User::find($user_id);
        $current_user_sum = $user->sum;
        $new_user_sum = $current_user_sum - $amount;
        $user->sum = $new_user_sum;
        $user->save();

        return view("charge_complete");
    }
}
