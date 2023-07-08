<?php
use Modules\Information\Http\Controllers\InformationController;
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
Route::prefix('panel')->group(function() {
    Route::prefix('/information')->group(function() {
        Route::resource('/informations', InformationController::class);
    });
});

