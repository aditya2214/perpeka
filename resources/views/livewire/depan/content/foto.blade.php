<div>
        <div class="container-fluid" style="margin:20px;">
            <h4>Album</h4>
            <div class="row">
            @foreach($foto as $f)
            <div class="col-md-4">
                <div class="card">
                <div class="card-body text-center" style="border:1px solid; border-radius:10px;">
                    <img loading="lazy" src="{{ url ('storage/'.$f->img) }}" style="width:250px; height:300px;" alt="">
                    <div style="text-align:center;">
                        <small><b>{{$f->description}}</b></small><br>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Di Upload : {{$f->created_at}}</small>
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