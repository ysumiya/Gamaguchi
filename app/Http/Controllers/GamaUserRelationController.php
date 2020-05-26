<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
