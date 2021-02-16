<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
use Livewire\WithPagination;

class Artikel extends Component
{
    public $pdf;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.depan.content.artikel',[
            'artikel' => DB::table('post')->where('kategori',5)->orderBy('created_at','DESC')->paginate(4)
        ]);
    }

    public function ShowArtikel($id){
        $ShowArtikel = DB::table('post')->where('id',$id)->first();

        $this->pdf = $ShowArtikel->file;
    }
}