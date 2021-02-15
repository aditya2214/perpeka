<div>
    <div class="conatiner" style="margin:20px;">
        <h4>Data Statistik</h4>
        <div class="row">
        @foreach($data_statistik as $ds)
        <div class="col-md-4">
            <a href="{{ url ('storage/'.$ds->file) }}" class="text-info">
            <div class="card" style="height:200px; border:2px solid;">
                <div class="card-body text-info">
                    <h3><b>{{$ds->title}}</b></h3> 
                    <small><b>{{$ds->description}}</b></small><br>
                    <small>Tanggal Upload : {{date('d-M-Y', strtotime($ds->created_at))}}</small><a target="_blank" href="{{ url ('storage/'.$ds->file) }}" class="btn btn-primary btn-sm float-right"><small>View</small></a>
                </div>
            </div>
            </a>
        </div>
        @endforeach
        </div>
        {{ $data_statistik->links() }}
    </div>
    <br><br>
</div>
