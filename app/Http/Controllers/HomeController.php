<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function upload_foto()
    {
        return view('upload_foto');
    }

    public function struktur_organisasi(){

        return view('struktur_organisasi');  
    }

    public function visi_misi(){

        return view('visi_misi');  
    }

    public function data_statistik(){

        return view('data_statistik');  
    }
    
}
