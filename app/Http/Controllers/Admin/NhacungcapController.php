<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\nhacungcap;
use Illuminate\Http\Request;
use DB;

class NhacungcapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('nhacungcap')->get()->toArray();
        return view('admin.nhacungcap.index',$resutl);
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
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nhacungcap=nhacungcap::where('id',$id)->first();
        return view('admin.nhacungcap.edit',compact('nhacungcap'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit(nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhacungcap $nhacungcap)
    {
        //
        $nhacungcap=nhacungcap::where('id',$request->id)->first();
        $nhacungcap->ten_ncc=$request->ten_ncc;
        $nhacungcap->diachi_ncc=$request->diachi_ncc;
        $nhacungcap->sdt=$request->sdt;
        $nhacungcap->email=$request->email;
        $nhacungcap->save();
        return redirect()->to("/admincp/ncc");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhacungcap $nhacungcap)
    {
        //
    }
}
