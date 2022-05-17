@extends('template_frontend')
@section('content-frontend')


<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(https://portal-skpd.sumedangkab.go.id/storage/slider/sumedang.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$title}}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('produk.head')}}">Page</a></li>
                        <li class="active">Detail Produk Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Start Services Area
        ============================================= -->
        <div class="services-area text-center bg-white thumb-less default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="service-items">
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal"><i class="flaticon-insurance"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Maklumat Pelayanan</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal1"><i class="flaticon-startup"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Visi dan Misi Pelayanan</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal2"><i class="flaticon-cloud"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Janji dan Moto Pelayanan</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
        
        <!-- Start Services Area
            ============================================= -->
            <div class="services-area text-center bg-white thumb-less">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"">Alur Pelayanan</h3>
                            <img src="https://portal-skpd.sumedangkab.go.id/{{$dtllayanan->alur_prosedur_image}}" class="img">
                            <p></p>
                        </div>
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Dasar Hukum</td>
                                    <td>{!!$dtllayanan->dasar_hukum!!}</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Persyaratan</td>
                                    <td>{!!$dtllayanan->persyaratan!!}</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Waktu Pelayanan</td>
                                    <td>{!!$dtllayanan->waktu_pelayanan!!}</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Biaya / Tarif</td>
                                    <td>{!!$dtllayanan->biaya!!}</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Produk Pelayanan</td>
                                    <td>{!!$dtllayanan->produk_pelayanan!!}</td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Pengelola Pengaduan</td>
                                    <td>{!!$dtllayanan->pengelola_pengaduan!!}</td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>Sarana dan Prasarana dan atau fasilitas</td>
                                    <td>{!!$dtllayanan->fasilitas!!}</td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td>Kompetensi Pelaksana</td>
                                    <td>{!!$dtllayanan->kompetensi_pelaksana!!}</td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td>Pengawasan Internal</td>
                                    <td>{!!$dtllayanan->pengawasan_internal!!}</td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td>Jumlah Pelaksana</td>
                                    <td>{!!$dtllayanan->numberof_implementer!!}</td>
                                </tr>
                                <tr>
                                    <th>11</th>
                                    <td>Jaminan Pelayanan</td>
                                    <td>{!!$dtllayanan->jaminan_pelayanan!!}</td>
                                </tr>
                                <tr>
                                    <th>12</th>
                                    <td>Jaminan keamanan dan keselamatan pelayanan</td>
                                    <td>{!!$dtllayanan->jamainan_keamanan_keselamatan!!}</td>
                                </tr>
                                <tr>
                                    <th>13</th>
                                    <td>Evaluasi Kinerja Pelaksana</td>
                                    <td>{!!$dtllayanan->evaluasi_kinerja!!}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            <!-- End Services Area -->
            @endsection

             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Maklumat Pelayanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                {!!$pl->maklumat_layanan!!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal1">Visi dan Misi Pelayanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                <strong>Visi Pelayanan Kami adalah : </strong>
                                <p>{!!$pl->visi_layanan!!}</p>
                                <strong>Misi Pelayanan Kami adalah : </strong>
                                <p>{!!$pl->misi_layanan!!}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal2">Janji dan Moto Pelayanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                <strong>Janji Pelayanan Kami adalah : </strong>
                                <p>{!!$pl->janji_layanan!!}</p>
                                <strong>Motto Pelayanan Kami adalah : </strong>
                                <p>{!!$pl->motto_layanan!!}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>