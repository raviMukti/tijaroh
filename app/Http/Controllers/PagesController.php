<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //root url
    public function index()
    {
        //Show View Welcome
        return view('beranda');
    }

    //return view bantuan page
    public function bantuan()
    {
        //Show View Welcome
        return view('bantuan');
    }

    //return view tentang page
    public function tentang()
    {
        //Show View Welcome
        return view('tentang');
    }
}
