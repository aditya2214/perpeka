<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class=""><i class="fas fa-users fa-1x"></i>&nbsp;Upload Gambar </h4>
    <small>(Struktur Organisasi)</small>
    <!-- <small>{{Request::url()}}</small> -->
    </div>
    <div class="row">
        <div class="col" >
            @if (session()->has('success')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <div class="card bg-info">
                <div class="card-body">
                    <form  wire:submit.prevent="upload_foto">
                        <input wire:model="img" type="file" accept="image/*" class="" style="border-radius:10px; border:1px solid;" multiple>


                        @error('img.*') <span class="error">{{ $message }}</span> @enderror
                        <br><br>
                        <button style="border-radius:10px; border:1px solid;" class="btn btn-success btn-sm">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        
        <div class="col-md-12 ">
            @if($imgs == null)

            @else
            <div class="card" style="margin:10px;">
                <div class="card-body">
                    <img loading="lazy" src="{{ url ('storage/'.$imgs->img) }}" style="width:100%;" alt=""><br>
                    <button wire:click="delete_foto({{$imgs->id}})" class="btn btn-sm btn-danger"><span data-feather="trash"></span>Hapus</button>
                </div>
            </div>
            @endif
        </div>
        
    </div>
</div>
