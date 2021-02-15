<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
{
    //
    public function perpeka_visi_misi(){

        $visi_misi = DB::table('visi_misi')->orderBy('created_at','DESC')->first();

        return view('perpeka_visi_misi',compact('visi_misi'));
    }

    public function perpeka_struktur_organisasi(){
        $struktur_organisasi = DB::table('post')->where('kategori',2)->orderBy('created_at','DESC')->limit(1)->get();


        return view('perpeka_struktur_organisasi',compact('struktur_organisasi'));
    }

    public function perpeka_kontak(){
        
        return view('perpeka_kontak');
    }

    public function perpeka_foto(){

        return view('perpeka_foto');
    }

    public function perpeka_data_statistik(){

        return view('perpeka_data_statistik');
    }
}
