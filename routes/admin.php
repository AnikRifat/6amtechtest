<?php

use App\Http\Controllers\DataTableController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware("can:role,'admin'")->group(function () {

    //users route
    Route::resource('users', UserController::class)->names('admin.users');
    Route::get('users/{user}/delete', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('datatable/users', [DataTableController::class, 'users'])
        ->name('datatable.users');

    //roles route
    Route::resource('roles', RoleController::class)->names('admin.roles');
    Route::get('roles/{role}/delete', [RoleController::class, 'destroy'])->name('admin.roles.destroy');

    //permissions route
    Route::resource('permissions', PermissionController::class)->names('admin.permissions');
    Route::get('permissions/{permission}/delete', [PermissionController::class, 'destroy'])->name('admin.permissions.destroy');
});

Route::middleware("can:role,'admin','employee'")->group(function () {
    //Product route
    Route::resource('products', ProductController::class)->names('admin.products');
    Route::get('products/{product}/delete', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::get('datatable/products', [DataTableController::class, 'products'])
        ->name('datatable.products');
});
