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
Route::resource('/project','ProjectController');
Route::patch('/tasks/{task}','ProjectTaskController@update');
Route::post('/project/{project}/tasks','ProjectTaskController@store');
