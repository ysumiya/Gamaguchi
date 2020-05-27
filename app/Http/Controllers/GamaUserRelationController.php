<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GamaUserRelation;

class GamaUserRelationController extends Controller
{
    //
    protected function insert(Request $data)
    {
        // $data = gama_name
        $gama_name = $data->input('gama_name');

        try{
            $gama = Gama::create(['gama_name'=>$gama_name]);
            return redirect('/home');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return view('create_gama', $data);
        }
        
    }
    public function search_by_user_id($user_id){
        $items =GamaUserRelation::where('user_id',$user_id)->get();
        $stack =array();
        foreach ($items as $i) {
            array_push($stack,array($i->gama_id,$i->owner_flag));
        }
        return $stack;
    }
    
}
