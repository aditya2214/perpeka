<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
use Livewire\WithPagination;
class UploadFoto extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $img;
    public $desc;
    public $media_select;
    public $gallery = false;
    public $query;
    protected $queryString = ['query'];

    public function render()
    {
        return view('livewire.admin-panel.content.upload-foto',[
            'imgs'=>DB::table('gallery')->where('media_select',0)->orderBy('created_at','DESC')->get(),
            'videos'=>DB::table('gallery')->where('media_select',1)->orderBy('created_at','DESC')->get(),

        ]);

    }

    public function upload_foto(){
        
            //code...
            if ($this->media_select == 0) {
                # code...
                $this->validate([
                    'desc' => 'required|min:5|max:100',
                    'media_select' => 'required',
                    'img' => 'required|image|max:1024',
                ]);
            }
                $imgs = $this->img->store('img','public');
                $upload_foto = DB::table('gallery')->insert([
                    'description'=>$this->desc,
                    'file'=>$imgs,
                    'media_select'=>$this->media_select
                    ]);
    
            $this->img = null;
            $this->desc = null;
    
            session()->flash('success', 'Post successfully saved.');
        
    }

    public function delete_foto($id){
        DB::table('gallery')->where('id',$id)->delete();
    }

    public function open_gallery(){
        $this->query = 'perpeka_media';
        $this->gallery = true;
    }
}
