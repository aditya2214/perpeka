<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
class UploadFoto extends Component
{
    use WithFileUploads;
    public $img;
    public $desc;
    public $media_select;

    public function render()
    {
        return view('livewire.admin-panel.content.upload-foto',[
            'imgs'=>DB::table('post')->where('kategori',1)->orderBy('created_at','DESC')->get()
        ]);

    }

    public function upload_foto(){
        try {
            //code...
            if ($this->media_select == 0) {
                # code...
                $this->validate([
                    'img' => 'image|max:1024',
                ]);
            }
                $imgs = $this->img->store('img','public');
                $upload_foto = DB::table('post')->insert([
                    'title'=>'null',
                    'kategori'=>1,
                    'description'=>$this->desc,
                    'img'=>$imgs,
                    'media_select'=>$this->media_select
                    ]);
    
            $this->img = null;
            $this->desc = null;
    
            session()->flash('success', 'Post successfully saved.');
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', 'Please Check Your Input.');
        }
    }

    public function delete_foto($id){
        DB::table('post')->where('id',$id)->delete();
    }
}
