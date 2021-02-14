<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
{
    //
    public function perpeka_visi_misi(){

        $visi_misi = DB::table('visi_misi')->first();

        return view('perpeka_visi_misi',compact('visi_misi'));
    }
}
