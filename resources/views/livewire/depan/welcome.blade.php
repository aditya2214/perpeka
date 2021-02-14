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
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    Histori
                    <button class="float-right btn btn-info "><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height:250px; width:300px;">
                                                <div class="card-header text-center">
                                                    <p><b>{{$pds->title}}</b></p> 
                                                </div>
                                                <div class="card-body">
                                                    <small>{{$pds->description}}</small>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary btn-sm float-right"><small>View All</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    Regulasi
                    <button class="float-right btn btn-info "><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height:250px; width:300px;">
                                                <div class="card-header text-center">
                                                    <p><b>{{$pds->title}}</b></p> 
                                                </div>
                                                <div class="card-body">
                                                    <small>{{$pds->description}}</small>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary btn-sm float-right"><small>View All</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    Artikel
                    <button class="float-right btn btn-info "><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height:250px; width:300px;">
                                                <div class="card-header text-center">
                                                    <p><b>{{$pds->title}}</b></p> 
                                                </div>
                                                <div class="card-body">
                                                    <small>{{$pds->description}}</small>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary btn-sm float-right"><small>View All</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;">
                    Berita
                    <button class="float-right btn btn-info "><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height:250px; width:300px;">
                                                <div class="card-header text-center">
                                                    <p><b>{{$pds->title}}</b></p> 
                                                </div>
                                                <div class="card-body">
                                                    <small>{{$pds->description}}</small>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary btn-sm float-right"><small>View All</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="card" style="width:100%;">
                <div class="card-header" style="background-color:#2459ad;color: white;overflow-x:auto;">
                    Data Statistik
                    <button class="float-right btn btn-info "><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body d-flex justify-content-center" style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                @foreach($post_data_statistik as $pds)
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height:250px; width:300px;">
                                                <div class="card-header text-center">
                                                    <p><b>{{$pds->title}}</b></p> 
                                                </div>
                                                <div class="card-body">
                                                    <small>{{$pds->description}}</small>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="" class="btn btn-primary btn-sm float-right"><small>View All</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
