<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
class DataStatistik extends Component
{
    use WithFileUploads;
    public $title;
    public $desc;
    public $file;
    public $pdf;
    public $img;
    public function render()
    {
        return view('livewire.admin-panel.content.data-statistik',[
            'PostDataStatistik'=>DB::table('post')->where('kategori',3)->get(),
            'pdf'=>$this->pdf
        ]);
    }

    public function storePost(){
        $storePost = DB::table('post')->insert([
            'title'=>$this->title,
            'description'=>$this->desc,
            'file'=>$this->file->store('pdf','public'),
            'kategori'=>3,
            'img'=>$this->img->store('img','public')
        ]);

        $this->title = null;
        $this->desc = null;
        $this->file = null;
        $this->img = null;
    }

    public function showPdf($id){
        $show_pdf = DB::table('post')->where('id',$id)->first();
        
        $this->pdf = $show_pdf->file;
    }

    public function deleteDataStatistik($id){
        $deleteDataStatistik = DB::table('post')->where('id',$id)->delete();
    }
}
