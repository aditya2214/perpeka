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
            'imgs'=>DB::table('struktur_organisasi')->orderBy('created_at','DESC')->first()
        ]);

    }

    public function upload_foto(){
        $this->validate([
            'img.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->img as $imgs) {
            $img = $imgs->store('img','public');
            $upload_foto = DB::table('struktur_organisasi')->insert([
                'img'=>$img,
                ]);
            }

        $this->img = null;

        session()->flash('success', 'Post successfully updated.');
    }

    public function delete_foto($id){
        DB::table('struktur_organisasi')->where('id',$id)->delete();
    }
}
