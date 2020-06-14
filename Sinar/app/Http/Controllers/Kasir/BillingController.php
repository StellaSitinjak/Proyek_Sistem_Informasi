<?php

namespace App\Http\Controllers\Kasir;

use DB;
use App\Customer;
use App\Menu;
use App\Meja;
use App\Pesanan;
use App\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pesanan')
            ->join('customer', 'userID', '=', 'customer.id')
            ->select('pesanan.mejaID',
                    'customer.nama',
                    'userID',
                    DB::raw('COUNT(userID) as amount'))
            ->where([
                ['pesanan.mejaID', '<>', 0],
                ['pesanan.status', '=', 0],
                ['pesanan.menuID', '<>', 0]
            ])
            ->groupBy('customer.nama',
                    'pesanan.mejaID',
                    'userID')
            ->get();

        return view('Kasir.billing',['data' => $data]);
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
        $pesanan = DB::table('pesanan')
                ->select('menu.*', 'jumlah', 'pesananID')
                ->join('menu', 'pesanan.menuID', '=', 'menu.id')
                ->where([
                    ['userID', $id],
                    ['status', '<>', 0]
                ])
                ->get();
        
        $total = DB::table('pesanan')
                ->select(DB::raw('SUM(menu.harga * pesanan.jumlah) as total'), 'userID')
                ->join('menu', 'pesanan.menuID', '=', 'menu.id')
                ->where([
                    ['userID', $id],
                    ['status', '<>', 0]
                ])
                ->groupBy('userID')
                ->havingRaw('SUM(menu.harga * pesanan.jumlah) > ?', [2500])
                ->get();

        $data['pesan'] = $pesanan;
        $data['jumlah'] = $total;
        return view('Kasir.purchase', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jumlah = DB::table('pesanan')
                ->select(DB::raw('SUM(menu.harga * pesanan.jumlah) as total'))
                ->join('menu', 'pesanan.menuID', '=', 'menu.id')
                ->where([
                    ['userID', $id],
                    ['status', '<>', 0]
                ])
                ->groupBy('userID')
                ->havingRaw('SUM(menu.harga * pesanan.jumlah) > ?', [2500])
                ->first();

        $pesanan = DB::table('pesanan')
                ->where('userID', $id)
                ->update(['status' => 1]);


        $data['nama'] = "Penjualan";
        $data['jenis'] = "Pemasukan";
        $data['total'] = $jumlah->total;
        Laporan::create($data);
        return redirect()->route('billing.index', $id);
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
