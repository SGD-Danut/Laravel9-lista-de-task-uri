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

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');

Route::get('tasks/{task?}', 'App\Http\Controllers\TasksController@show');

Route::get('/add-task', 'App\Http\Controllers\TasksController@create');

Route::post('/store-task', 'App\Http\Controllers\TasksController@store');

Route::get('/tasks/{task}/edit', 'App\Http\Controllers\TasksController@edit');

Route::post('/tasks/{task}/update-task', 'App\Http\Controllers\TasksController@update');

Route::get('/tasks/{task}/delete', 'App\Http\Controllers\TasksController@destroy');

Route::get('/tasks/{task}/complete', 'App\Http\Controllers\TasksController@complete');
