<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sanpham;
use Illuminate\Http\Request;
use DB;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $resutl['info']=DB::table('sanpham')->get()->toArray();
        return view('admin.sanpham.index',$resutl);
    }
    public function getAllData()
    {
        $db = sanpham::all();return json_encode($db);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sanpham.edit');
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
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanpham = sanpham::where('id',$id)->first();
        // dd($db);
        return view('admin.sanpham.edit',compact('sanpham'));
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(sanpham $sanpham)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sanpham $sanpham)
    {
        $sanpham = sanpham::find($request->id);
        $sanpham->Tensp = $request->Tensp;
        $sanpham->giacu = $request->giacu;
        $sanpham->giamoi = $request->giamoi;
        $sanpham->Anh = $request->Anh;
        $sanpham->Mota = $request->Mota;
        $sanpham->Thongtin = $request->Thongtin;
        $sanpham->save();
        return redirect()->to("/admincp/sanpham");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy(sanpham $sanpham)
    {
        //
    }
}

