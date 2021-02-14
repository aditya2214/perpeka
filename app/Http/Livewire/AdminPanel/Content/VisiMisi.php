<?php

namespace App\Http\Livewire\AdminPanel\Content;

use Livewire\Component;
use DB;
class VisiMisi extends Component
{
    public $visi;
    public $misi;
    public $updated = false;
    public $ids;
    public function render()
    {
        return view('livewire.admin-panel.content.visi-misi',[
            'visi_misi'=>DB::table('visi_misi')->orderBy('created_at','DESC')->first()
        ]);
    }

    public function storeVisiMisi(){
        $this->validate([
            'visi'=>'required',
            'misi'=>'required',

        ]);

        $storeVisiMisi = DB::table('visi_misi')->insert([
            'visi'=>$this->visi,
            'misi'=>$this->misi
        ]);
        
        $this->visi = null;
        $this->misi = null;
    }

    public function updatedVisiMisi(){
        $this->validate([
            'visi'=>'required',
            'misi'=>'required',

        ]);

        $storeVisiMisi = DB::table('visi_misi')->where('id',$this->ids)->update([
            'visi'=>$this->visi,
            'misi'=>$this->misi
        ]);
        
        $this->visi = null;
        $this->misi = null;
    }

    public function delete_visi_misi($id){
        $visi_misi = DB::table('visi_misi')->where('id',$id)->delete();
    }

    public function updated_visi_misi($id){
       $this->updated = true;

       $visi_misi_updated = DB::table('visi_misi')->where('id',$id)->first();
       
       $this->visi = $visi_misi_updated->visi;
       $this->misi = $visi_misi_updated->misi;
       $this->ids = $visi_misi_updated->id;
    }
}
