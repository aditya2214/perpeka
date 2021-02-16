<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
class StrukturOrganisasi extends Component
{
    use WithFileUploads;
    public $img=[];

    public function render()
    {
        return view('livewire.admin-panel.content.struktur-organisasi',[
            'imgs'=>DB::table('post')->where('kategori',2)->orderBy('created_at','DESC')->first()
        ]);

    }

    public function upload_foto(){
        $this->validate([
            'img.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->img as $imgs) {
            $img = $imgs->store('img','public');
            $upload_foto = DB::table('post')->insert([
                'kategori'=>2,
                'img'=>$img,
                ]);
            }

        $this->img = null;

        session()->flash('success', 'Post successfully updated.');
    }

    public function delete_foto($id){
        DB::table('post')->where('id',$id)->delete();
    }
}
