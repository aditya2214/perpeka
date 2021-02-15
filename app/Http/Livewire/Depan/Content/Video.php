<?php

namespace App\Http\Livewire\Depan\Content;

use Livewire\Component;
use DB;
class Video extends Component
{
    public function render()
    {
        return view('livewire.depan.content.video',[
            'video' => DB::table('post')->where('kategori',1)->where('media_select',1)->orderBy('created_at','DESC')->paginate(9)
        ]);
    }
}
