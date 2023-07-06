<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\phanhoi;
use Illuminate\Http\Request;

class phan_hoiControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resutl['info']=DB::table('phan_hoi')->get()->toArray();
        return view('admin.phanhoi.index',$resutl);

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
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $phanhoi=phanhoi::where('id',$id)->first();
        return view('admin.phanhoi.edit',compact('phanhoi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function edit(phanhoi $phanhoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phanhoi $phanhoi)
    {
        //
        $phanhoi=phanhoi::where('id',$request->id)->first();
        $phanhoi->nevel=$request->nevel;
        $phanhoi->note=$request->note;
        $phanhoi->created_at=$request->created_at;
       
        $phanhoi->save();
        return redirect()->to("/admincp/phanhoi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(phanhoi $phanhoi)
    {
        //
    }
}
