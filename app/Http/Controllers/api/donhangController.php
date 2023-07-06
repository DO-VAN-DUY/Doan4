<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\donhang;
use Illuminate\Http\Request;

class donhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return donhang::all();
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
        $db=new donhang();
        $db->id_kh=$request->id_kh;
        $db->Fist_Name=$request->Fist_Name;
        $db->Last_Name=$request->Last_Name;
        $db->dienthoai=$request->dienthoai;
        $db->diachi=$request->diachi;
        $db->Email=$request->Email;
       
        $db->Save();
        return $db;
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
        return donhang::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function edit(Donhang $donhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $db= donhang::findOrFail($id);
        $db->id_kh=$request->id_kh;
        $db->Fist_Name=$request->Fist_Name;
        $db->Last_Name=$request->Last_Name;
        $db->dienthoai=$request->dienthoai;
        $db->diachi=$request->diachi;
        $db->Email=$request->Email;
       
        $db->Save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        donhang::findOrFail($id)->delete();
        return "Deleted";
    }
}
