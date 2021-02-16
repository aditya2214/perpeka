<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="">Data Statistik</h4>
    <!-- <small>{{Request::url()}}</small> -->
    </div>

    <div class="row" style=" font-size:12px;">
    @if($updated)
        <div class="col-md-6">
            <div class="card bg-info">
                <div class="card-body">
                    <form wire:submit.prevent="updatedDataStatistik">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <br>
                            <select wire:model="kategori" class="form-control" id="exampleFormControlSelect1" style="border-radius:5px; border:1px solid;">
                                <option class="bg-warning" value="0">@select@</option>
                                @foreach($kategoris as $kategori)
                                <option value="1">Video</option>
                                @endforeach
                            </select>
                            @error('media_select') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>              
                        <div class="form-group">
                            <label for="">Title Post</label>
                            <input wire:model="id_ds" type="hidden" name="">
                            <input wire:model="title" type="text" class="form-control" style="border-radius:10px; border:1px solid;">

                        </div>
                        <div class="form-group">
                            <label for="">Description Post</label>
                            <textarea wire:model="desc" class="form-control" style="border-radius:10px; border:1px solid;"></textarea>
                        </div>
                        <div class="form-group">

                            <label for="">Ubah File</label>
                            <input wire:model="file" class="form-control" type="file" accept="application/pdf" id="" style="border-radius:10px; border:1px solid;">

                        </div>
                        <button class="btn btn-success btn-sm" style="border-radius:10px; border:1px solid;" >Upload</button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-6">
            <div class="card bg-info">
                <div class="card-body">
                    <form wire:submit.prevent="storePost">    
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <br>
                            <select wire:model="kategori" class="form-control" id="exampleFormControlSelect1" style="border-radius:5px; border:1px solid;">
                                <option class="bg-warning" value="0">=select=</option>
                                @foreach($kategoris as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                @endforeach
                            </select>
                            @error('media_select') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>             
                        <div class="form-group">
                            <label for="">Title Post</label>
                            <input wire:model="title" type="text" class="form-control" style="border-radius:10px; border:1px solid;">
                            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group">
                            <label for="">Description Post</label>
                            <textarea wire:model="desc" class="form-control" style="border-radius:10px; border:1px solid;"></textarea>
                            @error('desc') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group">

                            <label for="">File</label>
                            <input wire:model="file" class="form-control" type="file" accept="application/pdf" id="" style="border-radius:10px; border:1px solid;">
                            @error('file') <span class="error text-danger">{{ $message }}</span> @enderror

                        </div>
                        <button class="btn btn-success btn-sm" style="border-radius:10px; border:1px solid;" >Upload</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
        <div class="col-md-6" style="overflow-x:auto;">
            <label for="exampleFormControlSelect1">Select Table</label>
            <br>
            <select wire:model="select_table" class="" id="exampleFormControlSelect1" style="border-radius:5px; border:1px solid;">
                <option class="bg-warning" value="0">=select=</option>
                @foreach($kategoris as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                @endforeach
            </select>
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($PostDataStatistik as $pds)
                    <tr>
                        <td>{{$pds->title}}</td>
                        <td>{{$pds->description}}</td>
                        <td><a class="btn" style="color:blue;" target="_blanks" href="{{ url ('storage/'.$pds->file ) }}" >View PDF</a></td>
                        <td>
                            <button wire:click="edit({{$pds->id}})" class="btn btn-warning btn-sm">Edit</button>
                            <button wire:click="deleteDataStatistik({{$pds->id}})" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $PostDataStatistik->links()}}
        </div>
    </div>
    <hr>
    <div class="row">
        
        <div class="col-md-12">
        @if($pdf == null )

        @else
        <iframe
            src="{{ url ('storage/'.$pdf) }}"
            frameBorder="0"
            scrolling="auto"
            height="880px;"
            width="100%"
        ></iframe>
        @endif
        </div>
    </div>
</div>
