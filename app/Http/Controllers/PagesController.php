<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //root url
    public function index()
    {
        //Show View Welcome
        return view('pages.beranda');
    }

    //return view bantuan page
    public function bantuan()
    {
        //Show View bantuan
        return view('pages.bantuan');
    }

    //return view tentang page
    public function tentang()
    {
        //Show View tentang
        return view('pages.tentang');
    }
}
