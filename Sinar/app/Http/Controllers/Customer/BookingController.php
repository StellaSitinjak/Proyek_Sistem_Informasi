<?php

namespace App\Http\Controllers\Customer;

use DB;
use App\Meja;
use App\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('login')){
            $dataP = Pesanan::where([
                ['userID', Session::get('id')],
                ['menuID', 0],
            ])->first();

            if(!$dataP){
                $data = Meja::where('status', 0)->get();
            } else {
                $data = Meja::where('id', $dataP->mejaID)->get();
                // $data = DB::table('meja')
                //     ->where('status', 0)
                //     ->orWhere('id', $dataP->mejaID)
                //     ->get();
            }
            return view('Customer.booking',compact('data'));
        }
        return redirect('/login')->with('alert-success','Kamu harus login terlebih dahulu.');
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
        $data = Meja::where('id', $id)->get();
        return view('Customer.booking-view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Meja::where('id', $id)->get();
        return view('Customer.booking-edit',compact('data'));
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
        $dataP = new Pesanan();
        $dataP->userID = Session::get('id');
        $dataP->menuID = 0;
        $dataP->mejaID = $id;
        $dataP->jumlah = 0;
        $dataP->save();

        $data = Meja::where('id', $id)->first();
        $data->status = 1;
        $data->booking = $request->time;
        $data->save();
        return redirect()->route('booking.index')->with('alert-success','Pemesanan berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pesanan')->where([
            ['userID', Session::get('id')],
            ['menuID', 0],
            ['mejaID', $id],
            ['status', 0],
        ])->delete();

        DB::table('meja')
            ->where('id', $id)
            ->update([
                ['booking' => "0000-00-00 00:00:00"],
                ['status' => 0],
            ]);
        return redirect()->route('booking.index')->with('alert-success','Pemesanan meja berhasil di batalkan.');
    }
}
