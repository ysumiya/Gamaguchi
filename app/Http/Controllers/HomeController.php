<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GamaUserRelation;
use App\User;
use App\Gama;
// use App\Http\Controllers\GamaRelationController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $kojin_sum = $user->sum;
        $relations = $user->gama_user_relations;
        $datas = array();
        foreach ($relations as $relation) {
            $gama = $relation->gama;
            $gama_name = $gama->gama_name;
            $sum = $gama->sum;
            $owner_flag = $relation->owner_flag;
            array_push($datas, array("gama_name"=>$gama_name, "owner_flag"=>$owner_flag, "sum"=>$sum));
        }

        return view('home', compact("datas", "kojin_sum"));
    }
}
