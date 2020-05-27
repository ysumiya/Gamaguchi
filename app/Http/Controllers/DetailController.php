<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\GamaUserRelation;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    //
    public function index(Request $request, $id){
        $user_id = Auth::id();
        $gama = Gama::find($id);
        $gama_name = $gama->gama_name;
        $sum = $gama->sum;

        $is_owner = GamaUserRelation::where("user_id", $user_id)->where("gama_id", $id)->first()->owner_flag;

        $relations = $gama->gamauserrelations;
        $member_datas = array();
        foreach ($relations as $relation) {
            $user = $relation->user;
            $user_name = $user->name;
            // var_dump($user_name);
            $auth_flag = $relation->auth_flag;
            $owner_flag = $relation->owner_flag;
            array_push($member_datas, array("member_user_name"=>$user_name, "member_auth_flag"=>$auth_flag, "member_owner_flag"=>$owner_flag));
        }
        return view("wallet", compact("gama_name", "sum", "is_owner", "member_datas"));
    }
}
