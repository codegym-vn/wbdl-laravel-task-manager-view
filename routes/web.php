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

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('tasks')->group(function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'index']);

    Route::get('/create', function () {
        // Hiển thị Form tạo mới
    });

    Route::post('/store', function () {
        // Xử lý lưu dữ liệu tạo mới task thông qua phương thức POST từ form
    });

    Route::get('/{id}', function () {
        // Hiển thị thông tin chi tiết task có mã định danh id
    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin task
    });

    Route::post('{id}/update', function () {
        // Sử lý cập nhật task
    });

    Route::get('/{id}/delete', function () {
        // Xóa task
    });
});
