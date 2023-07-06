<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\hoadonnhap;
use Illuminate\Http\Request;
use DB;

class hoadonnhapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('hoadonnhap')->get()->toArray();
       
        return view('admin.hoadonnhap.index',$resutl);
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
     * @param  \App\Models\hoadonnhap  $billsnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
  
        $hoadonnhap=hoadonnhap::where('id',$id)->first();
        return view('admin.hoadonnhap.edit',compact('hoadonnhap'));
    }
        
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hoadonnhap  $billsnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(hoadonnhap $hoadonnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hoadonnhap  $billsnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hoadonnhap $hoadonnhap)
    {
        //
        $hoadonnhap=hoadonnhap::where('id',$request->id)->first();
        $hoadonnhap->id_nhanvien=$request->id_nhanvien;
        $hoadonnhap->id_ncc=$request->id_ncc;
        $hoadonnhap->date_order=$request->date_order;
        $hoadonnhap->tong_tien=$request->tong_tien;
       
        $hoadonnhap->save();
        return redirect()->to("/admincp/hoadonnhap");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hoadonnhap  $hoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy(hoadonnhap $hoadonnhap)
    {
        //
    }
}
