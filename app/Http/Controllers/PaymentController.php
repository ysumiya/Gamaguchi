<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\GamaLog;

class PaymentController extends Controller
{
    //
    public function payment(Request $request) {
        $gama_id = $request["gama_id"];
        $user_id = $request["user_id"];
        $amount = $request["amount"];

        $gama_log = GamaLog::create(["gama_id"=>$gama_id, "user_id"=>$user_id, "amount"=>$amount, "inc_dec_flag"=>0, "source"=>"お店で支払い"]);

        $gama = Gama::find($gama_id);
        $current_gama_sum = $gama->sum;
        $new_gama_sum = $current_gama_sum - $amount;
        $gama->sum = $new_gama_sum;
        $gama->save();

        return;

    }
}
