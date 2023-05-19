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
//Added By Mohsen
Route::prefix('panel')
    ->group(function () {
        Route::prefix('category')
            ->group(function () {
                Route::get('/', 'CategoryController@index');
            });
    });
