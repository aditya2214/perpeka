@extends('master_depan')

@section('content')
    <div class="conatiner" style="margin:20px;">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul style="margin:10px;">
                            <?php
                                $visi = $visi_misi->visi;
                                $visi_explode = (explode(".",$visi));
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
                <div class="card" >
                    <div class="card-body">
                        <ul style="margin:10px;">
                            <?php
                                $misi = $visi_misi->misi;
                                $misi_explode = (explode(".",$misi));
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