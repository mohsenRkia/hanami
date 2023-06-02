<?php

use Illuminate\Support\Facades\Route;
use Modules\Role\Http\Controllers\RolesController;
use Modules\Role\Http\Controllers\PermissionsController;

Route::prefix('panel')->name('panel.')->group(function () {

    Route::prefix('roles')->name('roles.')->group(function () {
        Route::resource('roles', RolesController::class);
//        Route::resource('permissions', RolesController::class);

    });
});

