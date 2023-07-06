<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\detailnhap;
use Illuminate\Http\Request;
use DB;

class detailnhapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resutl['info']=DB::table('detailnhap')->get()->toArray();
       
        return view('admin.detailnhap.index',$resutl);
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
     * @param  \App\Models\detailnhap  $detailnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detailnhap=detailnhap::where('id',$id)->first();
        return view('admin.detailnhap.edit',compact('detailnhap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailnhap  $detailnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(detailnhap $detailnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailnhap  $detailnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailnhap $detailnhap)
    {
        //
        $detailnhap=detailnhap::where('id',$request->id)->first();
        $detailnhap->id_hdn=$request->id_hdn;
        $detailnhap->id_sp=$request->id_sp;
        $detailnhap->sl=$request->sl;
        $detailnhap->save();
        return redirect()->to("/admincp/detailnhap");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailnhap  $detailnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailnhap $detailnhap)
    {
        //
    }
}
