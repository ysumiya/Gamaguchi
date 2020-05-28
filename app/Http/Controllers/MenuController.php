<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class MenuController extends Controller
{
    //
    public function show_menu_page() {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user_name = $user->name;
        $sum = $user->sum;
        return view("menu", compact('user_name', 'sum'));
    }
}
