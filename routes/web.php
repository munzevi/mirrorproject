<?php

use Illuminate\Support\Facades\Log;
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
Route::get('/mirror/{abidik}',function($abidik){
    Log::info('User providing url :'.$abidik);
    Log::info('Visitor ip :'.request()->getClientIp());
    return redirect()->away('https://'.$abidik);
});
Route::get('/results',function(){
    return file_get_contents(storage_path('logs/laravel.log'));
});
