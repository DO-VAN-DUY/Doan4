<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kho;
use Illuminate\Http\Request;
use DB;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resutl['info']=DB::table('kho')->get()->toArray();
        return view('admin.kho.index',$resutl);
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
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kho=kho::where('id',$id)->first();
        return view('admin.kho.edit',compact('kho'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function edit(kho $kho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kho $kho)
    {
        //
        $kho=kho::where('id',$request->id)->first();
    
        $kho->sl=$request->sl;
       
        $kho->save();
        return redirect()->to("/admincp/kho");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function destroy(kho $kho)
    {
        //
    }
}
