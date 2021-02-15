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
    <div class="row" style="overflow-x:auto;">
        <table class="table table-bordered">
            @foreach($video as $v)
            <tr>
                <td>
                    <div class="card" style="margin:20px;">
                        <div class="card-body">
                            <p>{{$v->description}}</p>
                            <video width="100%" height="100%" controls>
                            <source src="{{ url ('storage/'.$v->img) }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
