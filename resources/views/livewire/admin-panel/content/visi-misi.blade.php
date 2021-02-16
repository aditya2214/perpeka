<div style="font-size:12px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class=""><i class="fas fa-book fa-1x"></i>&nbsp;Visi & Misi</h4>
    <!-- <small>{{Request::url()}}</small> -->
    </div>
    @if($visi_misi == null)

    @else
    <div class="row">
        <div class="col">
            <div class="card bg-info">
                <div class="card-body ">  
                    <div class="row">
                        <?php
                            $visi = $visi_misi->visi;
                            $visi_explode = (explode(";",$visi));
                        ?>
                        <div class="col-md-6">
                            <div class="card">
                                <h4 class="text-center">Visi</h4>
                                <div class="card-body" >
                                    <ul>
                                        @foreach($visi_explode as $explode_v)
                                        <li>{{$explode_v}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                            $misi = $visi_misi->misi;
                            $misi_explode = (explode(";",$misi));
                        ?>
                        <div class="col-md-6">
                            <div class="card">
                            <h4 class="text-center">Misi</h4>
                                <div class="card-body" >
                                    @foreach($misi_explode as $explode_x)
                                    <li>{{$explode_x}}</li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button wire:click="delete_visi_misi({{$visi_misi->id}})" type="button" class="btn btn-danger">Hapus</button>
                        <button wire:click="updated_visi_misi({{$visi_misi->id}})" type="button" class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br>
    @if($updated)
    <form wire:submit.prevent="updatedVisiMisi">
        <div class="row">
            <div class="col-md-2 offset-md-5">
                <button class="btn btn-info form-control"><i class="fas fa-arrow-up"></i>&nbsp;Upload</button>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" wire:model="ids">
                    <h4 for="exampleFormControlTextarea1">Visi</h4>
                    <textarea wire:model="visi" class="form-control" id="" rows="3"  style="height:200px;"></textarea>
                    @error('visi') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h4 for="exampleFormControlTextarea1" class="text-center">Misi</h4>
                    <textarea wire:model="misi" class="form-control" id="" rows="3"  style="height:200px;"></textarea>
                    @error('misi') <span class="error text-danger ">{{ $message }}</span> @enderror

                </div>        
            </div>
        </div>
    </form>
    @else
    <form wire:submit.prevent="storeVisiMisi">
        <div class="row">
            <div class="col-md-2 offset-md-5">
                <button class="btn btn-info form-control"><i class="fas fa-arrow-up"></i>&nbsp;Upload</button>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="form-group">
                    <h4 for="exampleFormControlTextarea1">Visi </h4>
                    <textarea wire:model="visi" class="form-control" placeholder="Gunakan ( ; ) titik koma untuk paragraf baru." id="" rows="3" style="height:200px;"></textarea>
                    @error('visi') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h4 for="exampleFormControlTextarea1" class="text-center">Misi </h4>
                    <textarea wire:model="misi" class="form-control" placeholder="Gunakan ( ; ) titik koma untuk paragraf baru." id="" rows="3" style="height:200px;"></textarea>
                    @error('misi') <span class="error text-danger ">{{ $message }}</span> @enderror

                </div>        
            </div>
        </div>
    </form>
    @endif
    
    <!-- <script>
            CKEDITOR.replace( 'editor1','editor2' );
    </script> -->
    <br>
    
</div>
