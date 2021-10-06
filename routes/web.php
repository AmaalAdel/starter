<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\SecondController;
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

Route::get('index','Front\UserController@getIndex');

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/test3/{id?}', function () {
    return 'Hello';
})->name('b');

Route::namespace('Front')->group(function(){

    Route::get('user','UserController@showUserName');
});

Route::get('second','SecondController@showString');

Route::resource('news','NewsController');

Route::get('landing',function (){

    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
