<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::all();
        return view('Inventory-Chef.resep',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inventory-Chef.resep-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Menu();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->jenis = $request->jenis;
        $data->resep = $request->resep;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('resep.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Menu::where('id', $id)->get();
        return view('Inventory-Chef.resep-view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Menu::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->jenis = $request->jenis;
        $data->resep = $request->resep;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('resep.index')->with('alert-success','Data berhasil diubah!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Menu::where('id',$id)->first();
        $data->delete();
        return redirect()->route('resep.index')->with('alert-success','Data berhasi dihapus!');
    }
}
