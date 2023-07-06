<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\khachhang;
use Illuminate\Http\Request;
use DB;

class KhachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('khachhang')->get()->toArray();
        return view('admin.khachhang.index',$resutl);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
     
        $khachhang=khachhang::where('id',$id)->first();
        return view('admin.khachhang.edit',compact('khachhang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function edit(khachhang $khachhang,$request)
    {
        //
        $khachhang=khachhang::where('id',$request->id)->first();
        $khachhang->ten_kh=$request->ten_kh;
        $khachhang->dia_chi=$request->dia_chi;
        $khachhang->email=$request->email;
        $khachhang->sdt=$request->sdt;
        $khachhang->password=$request->password;
        $khachhang->save();
        return redirect()->to("/admincp/khachhang");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, khachhang $khachhang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function destroy(khachhang $khachhang)
    {
        //
    }
}
