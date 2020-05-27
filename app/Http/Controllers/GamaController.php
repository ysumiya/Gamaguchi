<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\GamaUserRelation;
use Illuminate\Support\Facades\Auth;

class GamaController extends Controller
{
    //
    protected function insert(Request $data)
    {
        // $data = gama_name
        $gama_name = $data->input('gama_name');
        $user_id = Auth::id();

        try{
            $gama = Gama::create(['gama_name'=>$gama_name]);
            $new_gama_id = $gama->id;
            $realtion = GamaUserRelation::create(['user_id'=>$user_id, 'gama_id'=>$new_gama_id, 'auth_flag'=>1, 'owner_flag'=>1]);
            return redirect('/create_gama_complete');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return view('create_gama', $data);
        }
        
    }

    public function calc_sum($gama_id)
    {
        $gama = Gama::find($gama_id);
        $sum = $gama->sum;
        return $sum;
    }

    public function set_active_flag($gama_id)
    {
        $gama = Gama::find($gama_id);
        $gama->active_flag = 1;
        $gama->save();
    }

    public function set_inactive_flag($gama_id)
    {
        $gama = Gama::find($gama_id);
        $gama->active_flag = 0;
        $gama->save();
    }
}
