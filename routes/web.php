<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/menu', 'MenuController@show_menu_page');

Route::get('/login', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/card_register', 'CcardController@show_regist_page');

Route::post('/card', 'CcardController@insert');

Route::get('/gama_create',  function() {
        return view('create_gama');
    });

Route::post('/gama', 'GamaController@insert');
// Route::delete('/gama', 'CloseController@close');

Route::get('/create_gama_complete/{id}', 'GamaController@create_url');//遷移先変更、ID追加

Route::get('/join', 'JoinController@show_join_page');

Route::post('/join', 'JoinController@join');

Route::post('/join/auth', 'JoinController@auth');

Route::delete('/gama', 'GamaController@delete');

Route::get('/wallet/{id}', 'DetailController@index');

// Route::get('/charge/{id}', 'ChargeController@index');
Route::get('/charge', 'ChargeController@index');

// Route::post('/charge/{id}', 'ChargeController@insert');
Route::post('/charge', 'ChargeController@insert');

Route::get('/payment', function() {
    return view("payment_gama");
});

// Route::post('/payment', 'PaymentController@payment');

Route::get('/close', 'CloseController@show_close_page');

Route::post('/close', 'CloseController@close');