<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/add', [AdminController::class, 'add'])->name('add');
Route::get('/view', [AdminController::class, 'view'])->name('view');
Route::post('/store', [AdminController::class, 'store'])->name('store');
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('todo.delete');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
