<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use function Symfony\Component\String\b;

class RegisterController extends Controller
{
   
    public function getRegister() {
        return view('register');
    }
    public function getRegisterkh() {
        return view('registerkh');
    }
   
    public function postRegister(Request $request) {
       $Quyen='Nhanvien';
        user::create([
            'full_name'=>$request->full_name,
            'address'=>$request->address,
            'email'=>$request->email,
            'image'=>$request->image,
            'password'=>bcrypt($request->password),
            'Quyen'=>$Quyen,
           

        ]);
        return redirect()->route('loginad');
    }
    public function postRegisterkh(Request $request) {
       
         khachhang::create([
             'Tenkh'=>$request->Tenkh,
             'Diachi'=>$request->Diachi,
             'SDT'=>$request->SDT,
             'Email'=>$request->Email,
             'password'=>bcrypt($request->password),
         ]);
         return redirect()->route('login');
     }
    
}
