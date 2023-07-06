<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\users;
use App\Models\khachhang;
use Auth;
use App\helper\CartHelper;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use Session;
use function Symfony\Component\String\b;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function showlogin()
    {
        return view('login');
    }
    public function slogin()
    {
        return view('loginad');
    }
   
   
    public function logins(Request $request)
    {
        if(Auth::guard('cus')->attempt($request->only('email','password'),$request->has('remember'))){
            return redirect()->route('home');
        }
        else {
               return redirect()->back()->with('error','tài khoản hoặc mật khẩu không đúng');
             }     
        
    }
    public function loginad(Request $request)
    {
        if((Auth::attempt($request->only('email','password'))))
         {
                   return redirect('admincp/sanpham');
         }
         else {
            return redirect()->back()->with('error','tài khoản hoặc mật khẩu không đúng');
          }
    }
    public function logoutad()
    {
        // Auth::guard('cus')->logout();
        Auth::logout();
        return redirect()->route('loginad');
    }
    public function logout(CartHelper $cart)
    {
        Auth::guard('cus')->logout();
        // Auth::logout();
        $cart->clear($cart); 
        return redirect()->route('home');
    }
    // public function postRegister(Request $request) {
    //     // Kiểm tra dữ liệu vào
    //     $allRequest  = $request->all();	
    //     $validator = $this->validator($allRequest);
     
    //     if ($validator->fails()) {
    //         // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
    //         return redirect('register')->withErrors($validator)->withInput();
    //     } else {   
    //         // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
    //         if( $this->create($allRequest)) {
    //             // Insert thành công sẽ hiển thị thông báo
    //             // Session::flash('success', 'Đăng ký thành viên thành công!');
    //             return redirect('register');
    //         } else {
    //             // Insert thất bại sẽ hiển thị thông báo lỗi
    //             // Session::flash('error', 'Đăng ký thành viên thất bại!');
    //             return redirect('register');
    //         }
    //     }
    // }
    // public function postRegisterkh(Request $request) {
    //     // Kiểm tra dữ liệu vào
    //     $allRequest  = $request->all();	
    //     $validator = $this->validator($allRequest);
     
    //     if ($validator->fails()) {
    //         // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
    //         return redirect('register')->withErrors($validator)->withInput();
    //     } else {   
    //         // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
    //         if( $this->create($allRequest)) {
    //             // Insert thành công sẽ hiển thị thông báo
    //             // Session::flash('success', 'Đăng ký thành viên thành công!');
    //             return redirect('register');
    //         } else {
    //             // Insert thất bại sẽ hiển thị thông báo lỗi
    //             // Session::flash('error', 'Đăng ký thành viên thất bại!');
    //             return redirect('register');
    //         }
    //     }
    // }
    
}
