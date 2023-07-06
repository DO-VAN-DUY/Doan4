<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ctdonhang;
use Illuminate\Http\Request;
use DB;

class ctdonhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resutl['info']=DB::table('ctdonhang')->get()->toArray();
        return view('admin.ctdonhang.index',$resutl);
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
     * @param  \App\Models\ctdonhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $donhang=ctdonhang::where('id',$id)->first();
        return view('admin.ctdonhang.edit',compact('ctdonhang'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ctdonhang  $donhang
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
     * @param  \App\Models\ctdonhang  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ctdonhang $ctdonhang)
    {
        //
        $ctdonhang=ctdonhang::where('id',$request->id)->first();
        $ctdonhang->Madonhang=$request->Madonhang;
        $ctdonhang->id_sp=$request->id_sp;
       
        $ctdonhang->save();
        return redirect()->to("/admincp/ctdonhang");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ctdơnhang  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(ctdonhang $dơnhang)
    {
        //
    }
}
