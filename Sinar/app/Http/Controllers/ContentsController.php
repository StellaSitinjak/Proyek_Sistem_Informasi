<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

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
}
