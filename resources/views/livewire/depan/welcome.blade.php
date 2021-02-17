<div>
    <div class="container-fluid text-center">
        <div class="row" style="overflow-x:auto;">
            <table>
                <tr>
                    <td>
                        <img loading="lazy" src="{{ asset ('logo/a.jpg') }}" style="width:600px;" alt="">
                    </td>
                    <td>
                        <img loading="lazy" src="{{ asset ('logo/b.jpg') }}" style="width:600px;" alt="">
                    </td>
                    <td>
                        <img loading="lazy" src="{{ asset ('logo/c.jpg') }}" style="width:600px;" alt="">
                    </td>
                    <td>
                        <img loading="lazy" src="{{ asset ('logo/d.jpg') }}" style="width:600px;" alt="">
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4>Papan Informasi</h4>
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam numquam, expedita nihil, nam ipsam velit vel laudantium provident temporibus, ut fuga reiciendis at odit adipisci blanditiis! Voluptas corrupti fuga cumque?
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    3 Histori Terbaru
                    <button class="float-right btn btn-info btn-sm"><i class="fas fa-plus"></i> &nbsp;View All</button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    
                </div>
            </div>
        </div> -->
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    3 Regulasi Terbaru
                    <a href="{{ url ('perpeka_regulasi') }}" class="float-right btn btn-info btn-sm"><i class="fas fa-plus"></i> &nbsp;View All</a href="{{ url ('perpeka_data_statistik') }}">
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                            <tr>
                                @foreach($regulasi as $pds)
                                <td>
                                    <div class="card" style="height:200px; width:300px; border:2px solid;">
                                        <div class="card-body text-info">
                                            <h3><b>{{$pds->title}}</b></h3> 
                                            <small><b>{{$pds->description}}</b></small><br>
                                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($pds->created_at))}}</small><a target="_blank" href="{{ url ('storage/'.$pds->file) }}" class="btn btn-primary btn-sm float-right"><small>View</small></a>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    3 Artikel Terbaru
                    <a href="{{ url ('perpeka_artikel') }}" class="float-right btn btn-info btn-sm"><i class="fas fa-plus"></i> &nbsp;View All</a href="{{ url ('perpeka_data_statistik') }}">
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                            <tr>
                                @foreach($artikel as $pds)
                                <td>
                                    <div class="card" style="height:200px; width:300px; border:2px solid;">
                                        <div class="card-body text-info">
                                            <h3><b>{{$pds->title}}</b></h3> 
                                            <small><b>{{$pds->description}}</b></small><br>
                                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($pds->created_at))}}</small><a target="_blank" href="{{ url ('storage/'.$pds->file) }}" class="btn btn-primary btn-sm float-right"><small>View</small></a>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    3 Berita Terbaru
                    <a href="{{ url ('perpeka_berita') }}" class="float-right btn btn-info btn-sm"><i class="fas fa-plus"></i> &nbsp;View All</a href="{{ url ('perpeka_data_statistik') }}">
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                            <tr>
                                @foreach($berita as $pds)
                                <td>
                                    <div class="card" style="height:200px; width:300px; border:2px solid;">
                                        <div class="card-body text-info">
                                            <h3><b>{{$pds->title}}</b></h3> 
                                            <small><b>{{$pds->description}}</b></small><br>
                                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($pds->created_at))}}</small><a target="_blank" href="{{ url ('storage/'.$pds->file) }}" class="btn btn-primary btn-sm float-right"><small>View</small></a>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    Data Statistik
                    <a href="{{ url ('perpeka_data_statistik') }}" class="float-right btn btn-info btn-sm"><i class="fas fa-plus"></i> &nbsp;View All</a>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="card" style="height:200px; width:300px; border:2px solid;">
                                        <div class="card-body text-info">
                                            <h3><b>{{$pds->title}}</b></h3> 
                                            <small><b>{{$pds->description}}</b></small><br>
                                            <small>Tanggal Upload : {{date('d-M-Y', strtotime($pds->created_at))}}</small><a target="_blank" href="{{ url ('storage/'.$pds->file) }}" class="btn btn-primary btn-sm float-right"><small>View</small></a>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <br><br>
</div>
