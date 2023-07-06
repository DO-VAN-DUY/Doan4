<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use DB;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('nhanvien')->get()->toArray();
        return view('admin.nhanvien.index',$resutl);
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
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nhanvien=nhanvien::where('id',$id)->first();
        return view('admin.nhanvien.edit',compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function edit(nhanvien $nhanvien)
    {
        //
        $nhanvien=nhanvien::where('id',$request->id)->first();
        $nhanvien->Tennv=$request->Tennv;
        $nhanvien->SDT=$request->SDT;
        $nhanvien->Email=$request->Email;
        $nhanvien->Diachi=$request->Diachi;
        $sanpham->save();
        return redirect()->to("/admincp/nhanvien");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhanvien $nhanvien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhanvien $nhanvien)
    {
        //
    }
}
