<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::all();
        return view('index',compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $data = Menu::all();
        return view('menu',compact('data'));
    }
}
