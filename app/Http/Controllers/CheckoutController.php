<?php
namespace App\Http\Controllers;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\helper\CartHelper;
//use Illuminate\Support\Facades\category;
use App\Models\donhang;
use App\Models\ctdonhang;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        if (Auth::guard('cus')->check()) {
            
        } else {
            return redirect()->route('login');
        }
                      return view('check');
    }
    public function success()
    {
        if (Auth::guard('cus')->check()) {
            
        } else {
            return redirect()->route('login');
        }
                      return view('checkout_succes');
    }
    public function submit_form(Request $req, CartHelper $cart)
    {
        if (Auth::guard('cus')->check()) {
            
        } else {
            return redirect()->route('login');
        } 
                     $c_id=Auth::guard('cus')->user()->id;
                      if($order=donhang::create([//lấy thông tin của đơn hàng
                                 'id_kh'=>$c_id,
                                 'Fist_Name'=> $req->Fist_Name,
                                 'Last_Name'=> $req->Last_Name,
                                 'dienthoai'=> $req->dienthoai,
                                 'diachi'=> $req->diachi,
                                 'Email'=> $req->Email
                      ])){
                                    $order_id = $order->id;
                                    foreach($cart->items as $product_id => $item){
                                                      $quantity=$item['quantity'];//thông tin giỏ hàng
                                                      $price=$item['giaban'];
                                                      ctdonhang::create([//lấy thông tin ctdh
                                                                        'Madonhang' => $order_id,
                                                                        'product_id' => $product_id,
                                                                        'quantity' => $quantity,
                                                                        'price'=> $price
                                                      ]);

                                    }
                                    session(['cart'=>'']);
                                    return redirect()->route('checkout_succes')->with('success','Đặt hàng thành công');

                      }else{
                                    return redirect()->back()->with('error','Đặt hàng thất bại');              
                      }
                    
    }
                      
}
   

