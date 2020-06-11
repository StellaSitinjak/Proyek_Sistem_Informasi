<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class Menu1 extends Controller
{
    public function index(){
        $data = Meja::all();
        return view('menu1',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pesan($nomor){
        $data = Meja::where('nomor',$nomor)->first();
        $data->status = 1;
        $data->save();
        return redirect()->route('menu1.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function batal($nomor){
        $data = Meja::where('nomor',$nomor)->first();
        $data->status = 0;
        $data->save();
        return redirect()->route('menu1.index');
    }
}
