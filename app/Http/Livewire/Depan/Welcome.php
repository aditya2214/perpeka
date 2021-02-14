<?php

namespace App\Http\Livewire\Depan;

use Livewire\Component;
use DB;
class Welcome extends Component
{
    public function render()
    {
        return view('livewire.depan.welcome',[
            'post_data_statistik' => DB::table('post')->where('kategori',3)->limit(3)->get()
        ]);
    }
}
