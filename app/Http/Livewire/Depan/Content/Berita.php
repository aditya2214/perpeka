<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
use Livewire\WithPagination;

class Berita extends Component
{
    public $pdf;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $pages=5;
    public $asc_desc='DESC';
    public $search;

    public function render()
    {
        return view('livewire.depan.content.berita',[
            'berita' => DB::table('post')
            ->where('kategori',4)
            ->where('title','like','%'.$this->search.'%')
            ->where('description','like','%'.$this->search.'%')
            ->orderBy('created_at',$this->asc_desc)
            ->paginate($this->pages),
            
            'date' => date('d-M-Y')
            ]);
    }

    public function ShowArtikel($id){
        $ShowArtikel = DB::table('post')->where('id',$id)->first();

        $this->pdf = $ShowArtikel->file;
    }
}
