<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CcardController extends Controller
{
    //
    protected function insert(Request $data)
    {
        // $data = number, month, year
        $limit_month_int = (int)$data->input('month');
        $limit_year_int = (int)$data['year'];

        echo($data->input('month'));
;
        // try{
        //     $ccard = App\Ccard::create(['number'=>$data['c_number'], 'limit_month_str'=>$data['c_limit_month'], 'limit_month_int'=>$limit_month_int, 'limit_year_str'=>$data['c_limit_year'], 'limit_year_int'=>$limit_year_int, 'user_id'=>Auth::id()]);
        //     return redirect('home');
        // } catch (\Illuminate\Database\QueryException $exception) {
        //     $errorInfo = $exception->errorInfo;
        //     return view('card_register', $data);
        // }
        
    }

    protected function show_regist_page()
    {
        return view('card_register');
    }

}
