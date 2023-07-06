<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use App\Models\nhacungcap;
use App\Models\donhang;
use Illuminate\Http\Request;
use App\Models\sanpham;
use \DateTime;
class sanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sanpham::all();
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $lsp = loaisp::orderBy('Tenloai','DESC')->select('id','Tenloai')->get();
        // $nccs = nhacungcap::orderBy('Tenncc','DESC')->select('id','Tenncc')->get();
        // return view('admin.sanpham.index',compact('lsp','nccs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $db=new sanpham();
        $db->Tensp=$request->Tensp;
        $db->Maloai=$request->Maloai;
        $db->Mancc=$request->Mancc;
        $db->giacu=$request->giacu;
        $db->giamoi=$request->giamoi;
        $db->Anh=$request->Anh;
        $db->Mota= $request->Mota;
        $db->Thongtin=$request->Thongtin;
        $db->Save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return sanpham::findOrFail($id);
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
    public function update(Request $request, $id)
    {
        // if($request->file('Anh')==null)
        // {
        //     $file="";
        // }else
        // {
        //     $file=$request->file('Anh')->store('Anh');
        // }
        $db= sanpham::findOrFail($id);
        $db->Tensp=$request->Tensp;
        $db->Maloai=$request->Maloai;
        $db->Mancc=$request->Mancc;
        $db->giacu=$request->giacu;
        $db->giamoi=$request->giamoi;
        $db->Anh=$request->Anh;
        $db->Mota=$request->Mota;
        $db->Thongtin=$request->Thongtin;
        $db->Save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sanpham::findOrFail($id)->delete();
        return "Deleted";
    }
}
