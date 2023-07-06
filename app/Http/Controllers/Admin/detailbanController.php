<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\detailban;
use Illuminate\Http\Request;
use DB;

class detailbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resutl['info']=DB::table('detailban')->get()->toArray();
       
        return view('admin.detailban.index',$resutl);
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
     * @param  \App\Models\detailban  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detailban $detailban)
    {
        //
        $detailban=detailban::where('id',$id)->first();
        return view('admin.detailban.edit',compact('detailban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailban  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailban  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailban $detailban)
    {
        //
        $detailban=detailnhap::where('id',$request->id)->first();
        $detailban->id_hdb=$request->id_hdb;

        $detailban->id_sp=$request->id_sp;
        $detailban->slg=$request->slg;
       
        $detailban->save();
        return redirect()->to("/admincp/detailban");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailban  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailban $detailban)
    {
        //
    }
}
