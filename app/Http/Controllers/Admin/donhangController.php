<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\donhang;
use Illuminate\Http\Request;
use DB;

class donhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('donhang')->get()->toArray();
        return view('admin.donhang.index',$resutl);
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
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $donhang=donhang::where('id',$id)->first();
        return view('admin.donhang.edit',compact('donhang'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function edit(donhang $donhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donhang  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donhang $donhang)
    {
        //
        $donhang=donhang::where('id',$request->id)->first();
        $donhang->hoten=$request->hoten;
        $donhang->diachi=$request->diachi;
       
        $donhang->save();
        return redirect()->to("/admincp/donhang");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dơnhang  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(donhang $dơnhang)
    {
        //
    }
}
