<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\Models\sanpham;
use App\helper\CartHelper;
use Auth;

class CartController extends Controller
{
    public function showCart()
    {
        if (Auth::guard('cus')->check()) {
            
        } else {
            return redirect()->route('login');
        }
        return view('cart');
    }
    public function addToCart(CartHelper $cart,$id)
    {
        if (Auth::guard('cus')->check()) {
            
        } else {
            return redirect()->route('login');
        }
        $product=sanpham::find($id);
        $cart->add($product);
        //dd(session('cart'));
        return redirect()->back();
        
    }
    public function remove(CartHelper $cart,$id)
    {
       
        $cart->remove($id); 
        return redirect()->back();      
    }
    public function update(CartHelper $cart,$id)
    {
        $quantity=request()-> quantity ? request()->quantity : 1;
        $cart->update($id,$quantity); 
        return redirect()->back();      
    }
    public function clear(CartHelper $cart)
    {
        $cart->clear($cart); 
        return redirect()->back();      
    }
     // public function addToCart($id)
    // {
    //    $productcart = sanpham::find($id);
    //    $cart= session()->get('cart');
    //    if(isset($cart[$id])){
    //         $cart[$id]['quantity']= $cart[$id]['quantity']+1;
    //    }else{
    //         $cart[$id]=[
    //             'Tensp'=>$productcart->Tensp,
    //             'giamoi'=>$productcart->giamoi,
    //             'price'=>$productcart->unit_price,
    //             'quantity'=> 1,
    //             'Anh'=> $productcart->Anh,
    //         ];

    //    }
    //    session()->put('cart',$cart);
    //    //echo "pre";
    //   // print_r(session()->get('cart'));
    //    return response()->json([
    //         'code'=>200,
    //         'message'=>'success'
    //    ], status:200);     
    // }
}
