@extends('master_depan')

@section('content')
    <div class="conatiner" style="margin:20px;">
        <div class="row" style="margin:20px;background: rgb(84,135,158);background: linear-gradient(0deg, rgba(84,135,158,1) 44%, rgba(237,240,241,1) 100%);">
            <div class="col-md-12">
                <div class="card" style="margin:20px;">
                    <h4 style="margin:20px;">Struktur Organisasi</h4>
                    @foreach($struktur_organisasi as $so)
                    <div class="card-body text-center">
                        <img src="{{ url ('storage/'.$so->img )}}" style="width:50%" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection