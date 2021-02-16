<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
use Livewire\WithPagination;
class Foto extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $desc;

    public function render()
    {
        return view('livewire.depan.content.foto',[
            'foto' => DB::table('gallery')->where('media_select',0)->orderBy('created_at','DESC')->paginate(9)
        ]);
    }

    public function zoom($id){
        $zoom = DB::table('gallery')->where('id',$id)->first();
        $this->img = $zoom->img;
        $this->desc = $zoom->description;

    }

    public function null(){
        $this->img = null;
        $this->desc = null;
    }
}
