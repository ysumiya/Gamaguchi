<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\GamaUserRelation;
use App\User;
use App\PersonalLog;

class CloseController extends Controller
{
    //
    public function show_close_page() {
        $gama_id = session("gama_id");
        $sum = Gama::find($gama_id)->sum;
        $member_count = GamaUserRelation::where("gama_id", $gama_id)->count();
        $return_amount = (int) ($sum / $member_count);
        return view("close_gama", compact("sum", "return_amount"));
    }

    public function close() {
        $gama_id = session("gama_id");
        $gama = Gama::find($gama_id);
        $sum = $gama->sum;
        $member_count = GamaUserRelation::where("gama_id", $gama_id)->count();
        $return_amount = (int) ($sum / $member_count);
        $relations = GamaUserRelation::where("gama_id", $gama_id)->get();

        foreach ($relations as $relation) {
            $user_id = $relation->user_id;
            $user = User::find($user_id);
            $current_sum = $user->sum;
            $new_sum = $current_sum + $return_amount;
            $user->sum = $new_sum;
            $user->save();

            $personal_log = PersonalLog::create(["user_id"=>$user_id, "amount"=>-$return_amount, "inc_dec_flag"=>1, "source"=>"返金"]);
        }

        $gama->active_flag = 0;
        $gama->save();

        return view("close_gama_complete", compact("return_amount"));
    }
}
