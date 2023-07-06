<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\NhaccController;
use App\Http\Controllers\api\sanphamController;
use App\Http\Controllers\api\nhanvienController;
use App\Http\Controllers\api\loaispController;
use App\Http\Controllers\api\khachhangController;
use App\Http\Controllers\api\NewController;
use App\Http\Controllers\api\usersController;
use App\Http\Controllers\api\hoadonnhapController;
use App\Http\Controllers\api\hoadonbanController;
use App\Http\Controllers\api\detailnhapController;
use App\Http\Controllers\api\detailbanController;
use App\Http\Controllers\api\donhangController;
use App\Http\Controllers\api\ctdonhangController;
use App\Http\Controllers\api\CartHelperController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('nhacc', NhaccController::class);
Route::resource('sanpham', sanphamController::class);
Route::resource('nhanvien', nhanvienController::class);
Route::resource('loaisp', loaispController::class);
Route::resource('khachhang', khachhangController::class);
Route::resource('news', NewController::class);
Route::resource('users', usersController::class);
Route::resource('hoadonnhap', hoadonnhapController::class);
Route::resource('hoadonban', hoadonbanController::class);
Route::resource('detailnhap', detailnhapController::class);
Route::resource('detailban', detailbanController::class);
Route::resource('donhang', donhangController::class);
Route::resource('ctdonhang', ctdonhangController::class);
