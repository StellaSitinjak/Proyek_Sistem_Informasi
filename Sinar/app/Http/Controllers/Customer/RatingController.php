<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rating($id)
    {
        $data = Menu::where('id', $id)->get();
        return view('Customer.rating', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ratingPost(Request $request, $id)
    {
        $data = Menu::where('id',$id)->first();
        $data->rating = $request->rating;
        $data->save();
        return redirect()->route('menu', $id)->with('alert-success','Data berhasil diubah!');
    }
}
