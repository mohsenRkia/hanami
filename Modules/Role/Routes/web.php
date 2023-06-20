<?php

use Illuminate\Support\Facades\Route;
use Modules\Role\Http\Controllers\RolesController;
use Modules\Role\Http\Controllers\PermissionsController;
use Modules\Role\Http\Controllers\RolePermissionController;

Route::prefix('panel')->name('panel.')->group(function () {
    Route::prefix('roles')->name('roles.')->group(function () {
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
        Route::resource('manage', RolePermissionController::class);
        Route::get('assignPermissionToRole', [RolePermissionController::class,'assignPermissionToRoleCreate'])->name('manage.assignPermissionToRoleCreate');
        Route::get('assignPermissionToRole', [RolePermissionController::class,'assignPermissionToRoleCreate'])->name('manage.assignPermissionToRoleCreate');
        Route::post('assignPermissionToRole', [RolePermissionController::class,'assignPermissionToRoleStore'])->name('manage.assignPermissionToRoleStore');

        Route::get('assignRoleToUserCreate', [RolePermissionController::class,'assignRoleToUserCreate'])->name('manage.assignRoleToUserCreate');
        Route::post('assignRoleToUserStore', [RolePermissionController::class,'assignRoleToUserStore'])->name('manage.assignRoleToUserStore');
        Route::get('assignRoleToUserEdit/{user}', [RolePermissionController::class,'assignRoleToUserEdit'])->name('manage.assignRoleToUserEdit');
        Route::post('assignRoleToUserUpdate/{user}', [RolePermissionController::class,'assignRoleToUserUpdate'])->name('manage.assignRoleToUserUpdate');
    });
});

