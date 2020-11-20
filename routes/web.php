<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', function(Request $request) {
    $request->image->store('images', 'public');
    return "uploadedddd";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');