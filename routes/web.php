<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('tasks')->group(function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [\App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [\App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/{id}/edit', [\App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
    Route::get('/{id}/delete', [\App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.delete');
});
