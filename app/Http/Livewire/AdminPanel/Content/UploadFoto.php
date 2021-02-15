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

    public function render()
    {
        return view('livewire.admin-panel.content.upload-foto',[
            'imgs'=>DB::table('post')->where('kategori',1)->orderBy('created_at','DESC')->get()
        ]);

    }

    public function upload_foto(){
        $this->validate([
            'img.*' => 'image|max:1024', // 1MB Max
        ]);

            $imgs = $this->img->store('img','public');
            $upload_foto = DB::table('post')->insert([
                'title'=>'null',
                'kategori'=>1,
                'description'=>$this->desc,
                'img'=>$imgs,
                ]);

        $this->img = null;
        $this->desc = null;

        session()->flash('success', 'Post successfully saved.');
    }

    public function delete_foto($id){
        DB::table('post')->where('id',$id)->delete();
    }
}
