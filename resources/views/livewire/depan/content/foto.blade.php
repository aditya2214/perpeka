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
            <div class="row bg-warning " style="border:1px solid;">
            @foreach($foto as $f)
            <div class="col-md-6">
                <div class="card"  style="margin-top:10px;margin-bottom:10px;">
                <div class="card-body text-center" style="border:1px solid; border-radius:10px;">
                    <img loading="lazy" src="{{ url ('storage/'.$f->img) }}" style="width:100%; height:400px;" alt="">
                    
                    <div class="text-center">
                        <small class="text-muted">Di Upload : {{$f->created_at}}</small>
                        <h4>{{$f->description}}</h4>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            </div>
            {{$foto -> links() }}
        </div>
    <br><br>
    <!-- Modal -->
    <!-- <style>
        .big-box h2 {
            text-align: center;
            width: 100%;
            font-size: 1.8em;
            letter-spacing: 2px;
            font-weight: 700;
            text-transform: uppercase;
            cursor:pointer;
        }
        .modal-dialog {
            width: 100%;
            height: 100%;
            padding: 0;
            margin:0;
        }
        .modal-content {
            height: 100%;
            border-radius: 0;
            color:#333;
            overflow:auto;
        }
        .modal-title {
            font-size: 3em;
            font-weight: 300;
            margin: 0 0 10px 0;
        }
        .close {
            color:black ! important;
            opacity:1.0;
        }
    </style>
    <div wire:ignore.self class="modal fade big-box" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$desc}}</h5>
            <button wire:click="null" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <img src="{{ url ('storage/'.$img )}}" style="width:300px;" alt="">
        </div>
        </div>
    </div>
    </div> -->
</div>
