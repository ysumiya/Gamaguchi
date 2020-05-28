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

Route::get('/create_gama_complete/{id}', 'GamaController@create_url');//遷移先変更、ID追加

Route::get('/wallet/{id}', 'DetailController@index');

Route::get('/join', 'JoinController@join');
