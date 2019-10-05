<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenyewaan;
use App\ModelBarang;
use Validator;

class Penyewaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPenyewaan::all();
        return view('penyewaan', compact('data'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ModelPenyewaan::all();
        return view('penyewaan_create',compact('data'));
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
            'namapen' => 'required',
            'namaba' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_pengembalian' => 'required',
        ]); 
        //-> validasi

        //ini yang menambah data
        $data = new ModelPenyewaan();
        $data->namapen = $request->namapen;
        $data->namaba = $request->namaba;
        $data->jumlah = $request->jumlah;
        $data->tgl_pinjam = $request->tgl_pinjam;
        $data->tgl_pengembalian = $request->tgl_pengembalian;
        $data->save();

        return redirect()->route('penyewaan.index')->with('alert_message','Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelPenyewaan::where('id', $id)->get();
        return view('penyewaan_edit', compact('data'));
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
            'namapen' => 'required',
            'namaba' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_pengembalian' => 'required',
        ]);

        $data = ModelPenyewaan::where('id', $id)->first();
        $data->namapen = $request->namapen;
        $data->namaba = $request->namaba;
        $data->jumlah = $request->jumlah;
        $data->tgl_pinjam = $request->tgl_pinjam;
        $data->tgl_pengembalian = $request->tgl_pengembalian;
        $data->save();

        return redirect()->route('penyewaan.index')->with('alert_message', 'Berhasil Mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =ModelPenyewaan::where('id', $id)->first();
        $data->delete();

        return redirect()->route('penyewaan.index')->with('alert_message', 'Berhasil menghapus data:)');
    }
}
