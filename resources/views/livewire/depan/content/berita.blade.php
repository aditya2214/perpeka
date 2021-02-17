<div>
    <div class="conatiner" style="margin:20px;">
        <div class="text-center">
            <h4>BERITA</h4>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                View
                <div class="row">
                    <div class="col-md-2">
                        <select wire:model="pages" class="form-control">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select wire:model="asc_desc" class="form-control">
                            <option value="ASC">ASC</option>
                            <option value="DESC">DESC</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <input wire:model="search" type="text" placeholder="Cari Artikel" class="form-control">
                    </div>
                </div>
                <br>
                @foreach($berita as $ds)
                    <a target="_blank" href="{{ url ('storage/'.$ds->file) }}" class="text-info">
                    <div class="card" style="height:200px; border:2px solid;">
                        @if(date('d-M-Y', strtotime($ds->created_at)) == $date )
                        <span class="badge badge-success">Terbaru</span>
                        @endif
                        <div class="card-body text-info">
                            <h3><b>{{$ds->title}}</b></h3> 
                            <small><b>{{$ds->description}}</b></small><br>
                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($ds->created_at))}}</small><a target="_blank" wire:click="ShowArtikel({{$ds->id}})" class="btn btn-primary btn-sm float-right"><small class="text-white">Read</small></a>
                        </div>
                    </div>
                    </a>
                @endforeach
            {{ $berita->links() }}
            </div>
            <div class="col-md-8">
            <br>
                @if($pdf == null )

                @else
                <iframe
                    src="{{ url ('storage/'.$pdf) }}"
                    frameBorder="0"
                    scrolling="auto"
                    height="900px;"
                    width="100%"
                ></iframe>
                @endif
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
