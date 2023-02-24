<?php

use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
