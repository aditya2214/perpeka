<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="">Data Statistik</h4>
    <!-- <small>{{Request::url()}}</small> -->
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-warning">
                <div class="card-body">
                    <form wire:submit.prevent="storePost">              
                        <div class="form-group">
                            <label for="">Title Post</label>
                            <input wire:model="title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description Post</label>
                            <textarea wire:model="desc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Images Post</label>
                            <input wire:model="img" class="form-control" type="file" accept="image/*" id="">
                        </div>
                        <div class="form-group">

                            <label for="">File</label>
                            <input wire:model="file" class="form-control" type="file" accept="application/pdf" id="">
                        </div>
                        <button class="btn btn-success btn-sm" style="border-radius:10px;">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
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
                        <td><a class="btn" style="color:blue;" wire:click="showPdf({{$pds->id}})">View PDF</a></td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button wire:click="deleteDataStatistik({{$pds->id}})" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
        @if($pdf == null )

        @else
        <iframe
            src="{{ url ('storage/'.$pdf) }}"
            frameBorder="0"
            scrolling="auto"
            height="800px;"
            width="100%"
        ></iframe>
        @endif
        </div>
    </div>
</div>