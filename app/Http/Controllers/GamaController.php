<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
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
            return redirect('/create_gama_complete');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return view('create_gama', $data);
        }
        
    }
}
