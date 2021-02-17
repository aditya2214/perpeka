<div>
<div class="container-fluid">
    <h4>Gallery</h4>
    <div class="form-row">
        <div class="col">
            <a href="{{url ('perpeka_foto') }}" class="btn btn-warning btn-sm">Images</a>
            <a href="{{ url ('perpeka_video') }}" class="btn btn-warning btn-sm">Videos</a>
        </div>
    </div>
    <br>
    <div class="row bg-warning" style="overflow-x:auto; border:1px solid;">
        @foreach($video as $v)
        <div class="col-md-6">
            <div class="card"  style="margin-top:10px;margin-bottom:10px;">
                <div class="card-body" style="border:1px solid; border-radius:10px; text-align:center;">
                    <video loading="lazy" style="width:100%; height:400px;" id="{{$v->id}}" controls>
                    <source src="{{ url ('storage/'.$v->file ) }}" type="video/mp4">
                    <source src="{{ url ('storage/'.$v->file ) }}" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                    <small>Di Upload Tgl : {{$v->created_at}}</small>
                    <h4>{{$v->description}}</h4>
                </div>
            </div>
        </div>
        {{$video -> links() }}
        @endforeach
    </div>
    <br><br>
</div>
</div>
