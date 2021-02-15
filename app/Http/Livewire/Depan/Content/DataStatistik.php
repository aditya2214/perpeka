<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
use Livewire\WithPagination;

class DataStatistik extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.depan.content.data-statistik',[
            'data_statistik' => DB::table('post')->where('kategori',3)->orderBy('created_at','DESC')->paginate(18)
        ]);
    }
}
