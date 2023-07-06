<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/control', [HomeController::class,'index']);
Route::get('/control1', [HomeController::class,'create']);
//chi tiết
Route::get('/shop_details/{Tenloai}', [HomeController::class,'shop_details'])->name('shop_details');
Route::get('/shop_tsp/{Tensp}', [HomeController::class,'shop_tsp'])->name('shop_tsp');
Route::get('/ctsp/{id}',[HomeController::class,'product_details'])->name('product_details');
Route::get('/news', [HomeController::class,'new']);
Route::get('/introduce', [HomeController::class,'introduce']);
//Cart
Route::get('addToCart/{id}', [CartController::class,'addToCart'])->name('addToCart');
Route::get('/showCart', [CartController::class,'showCart'])->name('showCart');
Route::get('remove/{id}', [CartController::class,'remove'])->name('cart.remove');
Route::get('update/{id}', [CartController::class,'update'])->name('cart.update');
Route::get('clear', [CartController::class,'clear'])->name('cart.clear');
Route::get('view', [CartController::class,'view'])->name('cart.view');


//Đặt hàng
Route::get('/check', [CheckoutController::class,'form'])->name('check');
Route::get('/subcheck', [CheckoutController::class,'submit_form'])->name('subcheck');
Route::get('/checkout_succes', [CheckoutController::class,'success'])->name('checkout_succes');
//Login admin
Route::get('/register', [RegisterController::class,'getRegister'])->name('register');
Route::post('/register', [RegisterController::class,'postRegister']);
Route::get('/loginad', [LoginController::class,'slogin'])->name('slogin');
Route::post('/loginad', [LoginController::class,'loginad'])->name('loginad');
Route::get('/logoutad', [LoginController::class,'logoutad'])->name('logoutad');

//Login khachhang
Route::get('/registerkh', [RegisterController::class,'getRegisterkh'])->name('registerkh');
Route::post('/registerkh', [RegisterController::class,'postRegisterkh']);
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/login', [LoginController::class,'showlogin'])->name('showlogin');
Route::post('/login', [LoginController::class,'logins'])->name('login');



Route::get('/search', [HomeController::class,'search'])->name('search');


//ADMIN 
use App\Http\Controllers\Admin\AdminController;


Route::get('/admincp', [AdminController::class,'index']);

use App\Http\Controllers\Admin\LoaiSPController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\AdmincpController;
use App\Http\Controllers\Admin\NhanvienController;
use App\Http\Controllers\Admin\KhachhangController;
use App\Http\Controllers\Admin\KhoController;
use App\Http\Controllers\Admin\NhacungcapController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\hoadonbanController;
use App\Http\Controllers\Admin\hoadonnhapController;
use App\Http\Controllers\Admin\detailbanController;
use App\Http\Controllers\Admin\detailnhapController;
use App\Http\Controllers\Admin\phan_hoiController;
use App\Http\Controllers\Admin\quangcaoController;
use App\Http\Controllers\Admin\slideController;
use App\Http\Controllers\Admin\usersController;
use App\Http\Controllers\Admin\donhangController;
use App\Http\Controllers\Admin\ctdonhangController;


Route::get('/admincp/sanpham', [SanPhamController::class,'index'])->middleware('Checklogout');

Route::get('/admincp/sanpham/getAllData', [SanPhamController::class,'getAllData']);

Route::get('/admincp/loaisp', [LoaiSPController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/nhanvien', [NhanvienController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/khachhang', [KhachhangController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/ncc', [NhacungcapController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/kho', [KhoController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/news', [NewController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/hoadonban', [hoadonbanController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/hoadonnhap', [hoadonnhapController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/detailban', [detailbanController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/detailnhap', [detailnhapController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/phanhoi', [phan_hoiController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/slide', [slideController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/users', [usersController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/donhang', [donhangController::class,'index'])->middleware('Checklogout');
Route::get('/admincp/ctdonhang', [ctdonhangController::class,'index'])->middleware('Checklogout');







/*api*/

Route::get('/admincp/nhacungcap',function(){return view("/admin/nhacc");});
Route::get('/admincp/sanphams',function(){return view("/admin/sanpham");});
Route::get('/admincp/nhanviens',function(){return view("/admin/nhanvien");});
Route::get('/admincp/loaisps',function(){return view("/admin/loaisp");});
Route::get('/admincp/khachhangs',function(){return view("/admin/khachhang");});
Route::get('/admincp/new',function(){return view("/admin/news");});
Route::get('/admincp/user',function(){return view("/admin/users");});
Route::get('/admincp/hoadonnhaps',function(){return view("/admin/hoadonnhap");});
Route::get('/admincp/hoadonbans',function(){return view("/admin/hoadonban");});
Route::get('/admincp/detailbans',function(){return view("/admin/detailnhap");});
Route::get('/admincp/detailbans',function(){return view("/admin/detailban");});
Route::get('/admincp/donhangs',function(){return view("/admin/donhang");});
Route::get('/admincp/ctdonhangs',function(){return view("/admin/ctdonhang");});




