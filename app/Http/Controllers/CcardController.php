<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CcardController extends Controller
{
    //
    protected function insert(array $data)
    {
        // $data = c_number, c_limit_month, c_limit_year
        $limit_month_int = (int)$data['c_limit_month'];
        $limit_year_int = (int)$data['c_limit_year'];

        try{
            $ccard = App\Ccard::create(['number'=>$data['c_number'], 'limit_month_str'=>$data['c_limit_month'], 'limit_month_int'=>$limit_month_int, 'limit_year_str'=>$data['c_limit_year'], 'limit_year_int'=>$limit_year_int, 'user_id'=>Auth::id()]);
            return redirect('home');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return view('card_register', $data);
        }
        
    }
}
