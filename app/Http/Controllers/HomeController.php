<?php

namespace App\Http\Controllers;
session_start();
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\helper\Cart;
//use Illuminate\Support\Facades\category;
use App\Models\sanpham;
use App\Models\loaisp;
use App\Models\news;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(session('cart'));

        $data = sanpham::all();
       
        $top_product=sanpham::limit(4)->orderBy('id','DESC')->get();
       // $catery=loaisp::limit(10)->orderBy('Tenloai','DESC')->get();
        $spcao=sanpham::where('giamoi','>=',200000)->limit(4)->orderBy('id','DESC')->get(); 
        return view('home',compact('data','top_product','spcao'));
        // $spcao= DB::select('SELECT * FROM `sanpham`WHERE sanpham.giamoi>=200');
        // return view('home',['data'=>$spcao]);
        
    }
    public function new()
    {
        $new=news::all();
        $new_product=news::limit(3)->orderBy('id','DESC')->get();
        return view('News',compact('new','new_product'));
    }
    public function introduce()
    {
        $new_product=news::limit(5)->orderBy('id','DESC')->get();
        $introduce=DB::select('SELECT * FROM `introduce`');
        return view('introduce',compact('introduce','new_product'));
    }
    public function shop_details($Tenloai)
    {
        $category=loaisp::where('Tenloai',$Tenloai)->first();
        $product=sanpham::where('Maloai',$category->id)->get();
       return view('shop_details',compact('product'));
    }
   
    public function product_details($id)
    {
        $pro=sanpham::find($id);
        $pro_spcl=sanpham::where('id',$id)->get();
        foreach($pro_spcl as $key =>$value)
        {
            $caty=$value->Maloai;
        }
        $produ=sanpham::where('Maloai',$caty)->get();
        return view('product_details',compact('pro','pro_spcl','produ'));
    }
    public function shop_tsp($Tensp)
    {
       $categorysp=sanpham::where('Tensp',$Tensp)->first();
       $productsp=sanpham::where('Tensp',$categorysp->Tensp)->get(); 
       return view('shop_tsp',compact('productsp'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('home');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // public function cart()
    // {
    //    // $items =unserialize($_SESSION['cart']) ? unserialize($_SESSION['cart']) : [];
        
        
    //     return view('cart');
    // }
    // public function add(Cart $cart,$id)
    // {
    //     //echo $id;
    //     $sanpham=sanpham::find($id);
    //     $cart->add($sanpham); 
    //      dd(session('cart'));
    //      return redirect()->back();      
    // }
    // public function remove(Cart $cart,$id)
    // {
       
    //     $cart->remove($id); 
    //     return redirect()->back();      
    // }
    // public function update(Cart $cart,$id,$quantity)
    // {
        
    //     $cart->update($id,$quantity); 
    //     return redirect()->back();      
    // }
    // public function clear(Cart $cart)
    // {
        
    //     $cart->clear($cart); 
    //     return redirect()->back();      
    // }
    public function search(Request $req)
    {
        $product=sanpham::where('Tensp','like','%'.$req->key.'%')
                        ->orWhere('giamoi',$req->key)->get();
                        return view('search',compact('product'));
    }
}
