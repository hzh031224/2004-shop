<?php

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
    echo date('Y-m-d H:i:s');die;
    return view('welcome');
});


// http://shop.2004.com/test
Route::get('/test',function(){

    $ip = $_SERVER['REMOTE_ADDR'];
    echo "客户端IP: ".$ip;die;
    echo '<pre>';print_r($_SERVER);echo '</pre>';

});

Route::get('/hello','TestController@hello');
Route::get('/sql1','TestController@sql1');

