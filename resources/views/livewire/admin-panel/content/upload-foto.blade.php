<div>
    @if($gallery == false)
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
                                <input wire:model="desc" type="text" placeholder="Description Media" class="form-control"  style="border-radius:10px; border:1px solid;">
                                @error('desc') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Videos/Images</label>
                                <br>
                                    <select wire:model="media_select" class="form-control" id="exampleFormControlSelect1" style="border-radius:5px; border:1px solid;">
                                    <option class="bg-warning" value="0">@select@</option>
                                    <option value="0">Images</option>
                                    <option value="1">Video</option>
                                </select>
                                @error('media_select') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input wire:model="img" type="file" class="" style="border-radius:10px; border:1px solid;">
                                @error('img') <span class="error text-danger" >{{ $message }}</span> @enderror
                            </div>
                            <button style="border-radius:10px; border:1px solid;" class="btn btn-success btn-sm">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div wire:click="open_gallery" class="card text-center bg-warning">
            <div class="card-body">
                <h4>Open Gallery</h4>
            </div>
        </div>
    @else
        <h4>Images</h4>
        <div class="row bg-warning" style="overflow-x:auto; border-radius:10px; border:1px solid;">
            <table>
                <tr>
                    @foreach($imgs as $img)
                        <td>
                            <div class="col-xs-1 ">
                                <div class="card" style="margin:10px; width:160px;">
                                    <div class="card-body" style="border:1px solid; border-radius:10px;">
                                        <img loading="lazy" src="{{ url ('storage/'.$img->img) }}" style="width:115px; height:115px;" alt="">
                                        <div style="text-align:center;">
                                            <small><b>{{$img->description}}</b></small><br>
                                            <button wire:click="delete_foto({{$img->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>

        <br>
        <h4>Videos</h4>
        <div class="row bg-warning" style="overflow-x:auto; border-radius:10px; border:1px solid;">
            <table>
                <tr>
                @foreach($videos as $video)
                    <td>
                        <div class="card" style="margin:10px;">
                            <div class="card-body" style="border:1px solid; border-radius:10px;">
                                <button wire:click="delete_foto({{$video->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                                <video loading="lazy" width="295" height="140" controls>
                                <source src="{{ url ('storage/'.$video->img ) }}" type="video/mp4">
                                <source src="{{ url ('storage/'.$video->img ) }}" type="video/ogg">
                                Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </td>
                @endforeach
                </tr>
            </table>
        </div>
    @endif
</div>
