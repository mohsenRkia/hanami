<?php
use Modules\Loction\Http\Controllers\AreasController;
use Modules\Loction\Http\Controllers\CountriesController;
use Modules\Loction\Http\Controllers\CitiesController;
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
    Route::prefix('/loction')->group(function() {
        Route::resource('/areas', AreasController::class );
        Route::resource('/countries', CountriesController::class );
        Route::resource('/cities', CitiesController::class );
    });
});




