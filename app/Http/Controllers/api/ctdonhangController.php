<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ctdonhang;
use Illuminate\Http\Request;

class ctdonhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ctdonhang::all();
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
        $db=new ctdonhang();
        $db->Madonhang=$request->Madonhang;
        $db->quantity=$request->quantity;
        $db->price=$request->price;
       
        $db->Save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return ctdonhang::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function edit(ctdonhang $ctdonhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $db= ctdonhang::findOrFail($id);
        $db->Madonhang=$request->Madonhang;
        $db->quantity=$request->quantity;
        $db->price=$request->price;
       
        $db->Save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ctdonhang::findOrFail($id)->delete();
        return "Deleted";
    }
}
