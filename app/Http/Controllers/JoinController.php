<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use App\User;
use App\Gama;
use App\GamaUserRelation;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    //
    public function show_join_page (Request $request) {
        $encurl = $request->code;
        $decurl = Crypt::decrypt($encurl);
        list($gama_id, $user_id) = preg_split("/-/", $decurl);
        $user_name = User::find($user_id)->name;
        $gama_name = Gama::find($gama_id)->gama_name;

        session(["invited_gama_id"=>$gama_id]);

        return view("join", compact("user_name", "gama_name"));
    }

    public function join () {
        $gama_id = session("invited_gama_id");
        $user_id = Auth::id();
        $relation = GamaUserRelation::create(['user_id'=>$user_id, 'gama_id'=>$gama_id, 'auth_flag'=>0, 'owner_flag'=>0]);
        return redirect("/home");
    }

    public function auth(Request $request) {
        $user_id = $request->user_id;
        $gama_id = $request->gama_id;
        $relation = GamaUserRelation::where("user_id", $user_id)->where("gama_id", $gama_id)->first();
        // dd($relation);
        $relation->auth_flag = 1;
        $relation->save();
        return redirect("wallet/".$gama_id);
    }
}