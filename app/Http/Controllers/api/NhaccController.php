<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhacungcap;
use \DateTime;
class NhaccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return nhacungcap::all();
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
        // `ten_ncc`, `diachi_ncc`, `email`, `sdt`, `Delet`
        $db=new nhacungcap();
        $db->Tenncc=$request->Tenncc;
        $db->Diachi=$request->Diachi;
        $db->Email=$request->Email;
        $db->Dienthoai=$request->Dienthoai;
        
        $db->Save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return nhacungcap::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db= nhacungcap::findOrFail($id);
        $db->Tenncc=$request->Tenncc;
        $db->Diachi=$request->Diachi;
        $db->Email=$request->Email;
        $db->Dienthoai=$request->Dienthoai;
        $db->Save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        nhacungcap::findOrFail($id)->delete();
        return "Deleted";
    }
}
