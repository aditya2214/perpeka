@extends('master_depan')

@section('content')
    <div class="conatiner" style="margin:20px;">
        <div class="row" style="margin:20px;background: rgb(84,135,158);background: linear-gradient(0deg, rgba(84,135,158,1) 44%, rgba(237,240,241,1) 100%);">
            <div class="col-md-6">
                <div class="card"  style="margin:20px;">
                    <div class="card-body">
                        <h4>VISI</h4>
                        <ul style="margin:10px;">
                            <?php
                                $visi = $visi_misi->visi;
                                $visi_explode = (explode(";",$visi));
                            ?>
                            @foreach($visi_explode as $ve)
                            <li>
                                {{$ve}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"  style="margin:20px;">
                    <div class="card-body">
                        <h4>MISI</h4>
                        <ul style="margin:10px;">
                            <?php
                                $misi = $visi_misi->misi;
                                $misi_explode = (explode(";",$misi));
                            ?>
                            @foreach($misi_explode as $me)
                            <li>
                                {{$me}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection