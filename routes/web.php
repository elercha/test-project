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

Route::group([
    'prefix' => 'users'
], function () {
    Route::get('create', [
        'uses' => 'App\Http\Controllers\UserController@create',
        'as' => 'users.create'
    ]);

    Route::post('store', [
        'uses' => 'App\Http\Controllers\UserController@store',
        'as' => 'users.store'
    ]);
});
