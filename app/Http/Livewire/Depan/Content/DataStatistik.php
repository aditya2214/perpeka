<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
use Livewire\WithPagination;

class DataStatistik extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $pdf;
    public $pages=5;
    public $asc_desc='DESC';
    public $search;

    public function render()
    {
        return view('livewire.depan.content.data-statistik',[
            'data_statistik' => DB::table('post')
            ->where('kategori',3)
            ->where('title','like','%'.$this->search.'%')
            ->where('description','like','%'.$this->search.'%')
            ->orderBy('created_at',$this->asc_desc)
            ->paginate($this->pages)        ]);

        }
        
        public function ShowArtikel($id){
            $ShowArtikel = DB::table('post')->where('id',$id)->first();
    
            $this->pdf = $ShowArtikel->file;
        }
}
