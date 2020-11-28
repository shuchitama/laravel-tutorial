<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/todos', 'TodoController@index')->name('todo.index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todo.delete');

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