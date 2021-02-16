<?php

namespace App\Http\Livewire\Depan;

use Livewire\Component;
use DB;
class Welcome extends Component
{
    public function render()
    {
        return view('livewire.depan.welcome',[
            'post_data_statistik' => DB::table('post')->where('kategori',3)->orderBy('created_at','DESC')->limit(3)->get(),
            'berita' => DB::table('post')->where('kategori',4)->orderBy('created_at','DESC')->limit(3)->get(),
            'artikel' => DB::table('post')->where('kategori',5)->orderBy('created_at','DESC')->limit(3)->get(),
            'regulasi' => DB::table('post')->where('kategori',6)->orderBy('created_at','DESC')->limit(3)->get()

        ]);
    }
}
