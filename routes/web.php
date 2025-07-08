<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserRoleController;
use Illuminate\Support\Facades\Artisan;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return back()->with('success', 'Cache cleared successfully!');
})->name('clear.cache');



Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);


Route::get('users', [UserRoleController::class, 'index'])->name('users.index');
Route::get('users/{user}/edit', [UserRoleController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserRoleController::class, 'update'])->name('users.update');

Route::get('roles/{role}/permissions', [RolePermissionController::class, 'edit'])->name('roles.permissions.edit');
Route::put('roles/{role}/permissions', [RolePermissionController::class, 'update'])->name('roles.permissions.update');