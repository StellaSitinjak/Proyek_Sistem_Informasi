<?php

namespace App\Http\Controllers;

use DB;
use App\Menu;
use App\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::all();
        return view('menu',compact('data'));
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
        $dataP = DB::table('pesanan')->where([
            ['userID', '=', Session::get('id')],
            ['mejaID', '!=', 0],
        ])->first();
        if($dataP){
            $meja = $dataP->mejaID;
            // echo $meja;
            if($dataP->menuID == 0){
                Pesanan::where([
                    ['userID', '=', Session::get('id')],
                    ['mejaID', '!=', 0],
                ])->update(['menuID'=>$id, 'jumlah'=>1]);
            } elseif($dataP->menuID == $id) {
                Pesanan::where([
                    ['userID', '=', Session::get('id')],
                    ['mejaID', '!=', 0],
                    ['menuID', '=', $id],
                ])->update(['jumlah'=> $dataP->jumlah + 1]);
            } else {
                $data = new Pesanan();
                $data->userID = Session::get('id');
                $data->menuID = $id;
                $data->mejaID = $meja;
                $data->jumlah = 1;
                $data->save();
            }
        } else{
            $data = new Pesanan();
            $data->userID = Session::get('id');
            $data->menuID = $id;
            $data->mejaID = 0;
            $data->jumlah = 1;
            $data->save();
        }
        return redirect()->route('menu.index')->with('alert-success','Berhasil Dimasukkan ke Cart!');
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
        //
    }
}
