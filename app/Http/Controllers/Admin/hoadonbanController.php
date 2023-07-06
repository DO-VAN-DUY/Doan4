<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\hoadonban;
use Illuminate\Http\Request;
use DB;

class hoadonbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('hoadonban')->get()->toArray();
     
        return view('admin.hoadonban.index',$resutl);
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
     * @param  \App\Models\hoadonban  $bills_ban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $billsban=hoadonban::where('id',$id)->first();
        return view('admin.hoadonban.edit',compact('hoadonban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hoadonban  $bills_ban
     * @return \Illuminate\Http\Response
     */
    public function edit(hoadonban $hoadonban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bills_ban  $bills_ban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bills_ban $bills_ban)
    {
        //
        $hoadonban=hoadonban::where('id',$request->id)->first();
        $hoadonban->date_order=$request->date_order;
        $hoadonban->tong_tien=$request->tong_tien;
       
        $hoadonban->save();
        return redirect()->to("/admincp/bills_ban");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hoadonban  $bills_ban
     * @return \Illuminate\Http\Response
     */
    public function destroy(hoadonban $hoadonban)
    {
        //
    }
}
