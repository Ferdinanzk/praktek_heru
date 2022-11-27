<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ('hai ok kok');
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
        $this->validate($request, [
            'tgl_tanggapan'=>'required',
            'tanggapan'=>'required'

        ]);
        
        Tanggapan::create([
            'pengaduan_id'=>$request->get('pengaduan_id'),
            'user_id'=>$request->get('user_id'),
            'tgl_tanggapan'=>$request->get('tgl_tanggapan'),
            'tanggapan'=>$request->get('tanggapan'),

        ]);
        
        Pengaduan::Where('id',$request->pengaduan_id)->update([
            'status'=>$request->get('status'),
        ]);




        return 
        redirect()->route('pengaduan.index')->with('masssage','Pengaduan Berhasil DiLaporkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::Find($id);
        return view ('tanggapan.create', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan =  Tanggapan::find($id);
        return view('tanggapan.edit',compact('tanggapan'));
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
        $this->validate($request, [
            'tgl_tanggapan'=>'required',
            'tanggapan'=>'required',
            'status'=>'required',

        ]);

        Pengaduan:: where('id',$request->pengaduan_id)->update([
            'status'=>$request->get('status'),
        ]);

        $tanggapan = Tanggapan::find($id);
        $tanggapan->tgl_tanggapan= $request->get('tgl_tanggapan');
        $tanggapan->tanggapan= $request->get('tanggapan');
        $tanggapan->save();
        return 
        redirect()->route('pengaduan.index')->with('masssage','Tanggapan Berhasil DiUPdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
