<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
    Route::resource('/todo', 'TodoController');
    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
    Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');