<?php

namespace App\Http\Controllers\InventoryChef;

use App\Bahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bahan::all();
        return view('InventoryChef.stok',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('InventoryChef.stok-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Bahan();
        $data->nama = $request->nama;
        $data->stok = $request->stok;
        $data->satuan = $request->satuan;
        $data->save();
        return redirect()->route('stok.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = Bahan::where('id', $id)->get();
        return view('InventoryChef.stok-edit', compact('data'));
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
        $data = Bahan::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->stok = $request->stok;
        $data->satuan = $request->satuan;
        $data->save();
        return redirect()->route('stok.index', $id)->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bahan::where('id',$id)->first();
        $data->delete();
        return redirect()->route('stok.index')->with('alert-success','Data berhasi dihapus!');
    }
}
