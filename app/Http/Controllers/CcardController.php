<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ccard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CcardController extends Controller
{
    //
    protected function insert(Request $data)
    {
        // $data = number, month, year
        $number = $data->input('number');
        $limit_month_str = $data->input('month');
        $limit_year_str = $data->input('year');
        $limit_month_int = (int)$limit_month_str;
        $limit_year_int = (int)$limit_year_str;
        $user_id = Auth::id();

        try{
            $ccard = Ccard::create(['number'=>$number, 'limit_month_str'=>$limit_month_str, 'limit_month_int'=>$limit_month_int, 'limit_year_str'=>$limit_year_str, 'limit_year_int'=>$limit_year_int, 'user_id'=>$user_id]);
            return redirect('home');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
	   \Log::critical($errorInfo); 
           return view('card_register', $data);
        }
        
    }

    protected function show_regist_page()
    {
        return view('card_register');
    }

}
