<div>
    <div class="conatiner" style="margin:20px;">
        <h4>Artikel</h4>
        <div class="row">
            <div class="col-md-4">
                @foreach($artikel as $ds)
                    <a href="{{ url ('storage/'.$ds->file) }}" class="text-info">
                    <div class="card" style="height:200px; border:2px solid;">
                        <div class="card-body text-info">
                            <h3><b>{{$ds->title}}</b></h3> 
                            <small><b>{{$ds->description}}</b></small><br>
                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($ds->created_at))}}</small><a target="_blank" wire:click="ShowArtikel({{$ds->id}})" class="btn btn-primary btn-sm float-right"><small class="text-white">Read</small></a>
                        </div>
                    </div>
                    </a>
                @endforeach
            {{ $artikel->links() }}
            </div>
            <div class="col-md-8">
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
    </div>
    <br><br>
</div>
