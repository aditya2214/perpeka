<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="">Upload Foto</h4>
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
            @if (session()->has('error')) 
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <div class="card bg-info">
                <div class="card-body">
                    <form wire:submit.prevent="upload_foto">
                        <div class="form-group">
                            <input wire:model="desc" type="text" placeholder="Description Images" class="form-control"  style="border-radius:10px; border:1px solid;">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Media Select</label>
                            <br>
                                <select wire:model="media_select" class="form-control" id="exampleFormControlSelect1" style="border-radius:5px; border:1px solid;">
                                <option class="bg-warning" value="0">@select@</option>
                                <option value="0">Images</option>
                                <option value="1">Video</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input wire:model="img" type="file" class="" style="border-radius:10px; border:1px solid;">
                            @error('img') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <button style="border-radius:10px; border:1px solid;" class="btn btn-success btn-sm">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="overflow-x:auto;">
    <table>
        <tr>
            @foreach($imgs as $img)
                <td>
                @if($img->media_select == 1)
                    <video width="320" height="240" controls>
                    <source src="{{ url ('storage/'.$img->img ) }}" type="video/mp4">
                    <source src="{{ url ('storage/'.$img->img ) }}" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                @else
                    <div class="col-xs-1 ">
                        <div class="card" style="margin:10px; width:160px;">
                            <div class="card-body" style="border:1px solid; border-radius:10px;">
                                <img loading="lazy" src="{{ url ('storage/'.$img->img) }}" style="width:115px;" alt="">
                                <div style="text-align:center;">
                                    <small><b>{{$img->description}}</b></small><br>
                                    <button wire:click="delete_foto({{$img->id}})" class="btn btn-sm btn-danger"><span data-feather="trash"></span>Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                @endif
            @endforeach
        </tr>
    </table>
    </div>
</div>
