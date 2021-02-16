<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
use Livewire\WithPagination;
class DataStatistik extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    public $title;
    public $desc;
    public $file;
    public $pdf;
    public $updated;
    public $id_ds;
    public $kategori;
    public $select_table = 3;
    public function render()
    {
        return view('livewire.admin-panel.content.data-statistik',[
            'kategoris' => DB::table('master_kategori')->get(),
            'PostDataStatistik'=>DB::table('post')->where('kategori',$this->select_table)->paginate(4),
            'pdf'=>$this->pdf
        ]);
    }

    public function resetInput(){
        $this->title = null;
        $this->desc = null;
        $this->file = null;
        $this->kategori=null;
    }

    public function storePost(){
        $this->validate([
            'title'=> 'required|min:5|max:50',
            'desc' => 'required|min:5|max:100',
            'file' => 'required|mimes:pdf'
        ]);

        $storePost = DB::table('post')->insert([
            'title'=>$this->title,
            'description'=>$this->desc,
            'file'=>$this->file->store('pdf','public'),
            'kategori'=>$this->kategori,
        ]);

        $this->resetInput();
    }

    public function updatedDataStatistik(){
        if ($this->file == null) {
            # code...
            $updatedDataStatistik = DB::table('post')->where('id',$this->id_ds)->update([
                'title'=>$this->title,
                'description'=>$this->desc
            ]);
        }else{
            $updatedDataStatistik = DB::table('post')->where('id',$this->id_ds)->update([
                'title'=>$this->title,
                'description'=>$this->desc,
                'file'=>$this->file->store('pdf','public'),
            ]);
        }
        $this->resetInput();
    }

    public function edit($id){
        $this->updated = true;
        $data_statistik = DB::table('post')->where('id',$id)->first();
        
        $this->id_ds = $data_statistik->id;
        $this->title = $data_statistik->title;
        $this->desc  = $data_statistik->description;
        
    }

    public function showPdf($id){
        $show_pdf = DB::table('post')->where('id',$id)->first();
        
        $this->pdf = $show_pdf->file;
    }

    public function deleteDataStatistik($id){
        $deleteDataStatistik = DB::table('post')->where('id',$id)->delete();
    }
}
