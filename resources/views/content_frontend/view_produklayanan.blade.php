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
                        <li class="active">Produk Layanan</li>
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
        
        <!-- Start Blog Area 
            ============================================= -->
            <div class="blog-area bg-grey bottom-less">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="site-heading text-center">
                                <h2>Produk Layanan Kami</h2>
                                <p>
                                    Menu yang menyajikan Layanan Kami yang ada pada Website ini, Layanan ini dapat dilihat secara jelas dengan cara klik selengkapnya untuk mengetahui syarat dan ketentuan layanan tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog-items">
                            
                            @foreach ($pls as $dpls)
                            
                            <!-- Single Item -->
                            <div class="col-md-4 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="https://portal-skpd.sumedangkab.go.id/{{$dpls->alur_prosedur_image}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="date">
                                            {{$dpls->created_at->format('d M Y')}}
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    
                                                    <a href="#"><i class="fas fa-user"></i>Admin Website</a>
                                                    
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-eye"></i> Biaya Rp. {{$dpls->biaya}},-</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">{{$dpls->nama_layanan}}</a>
                                        </h4>
                                        
                                        <button class="btn btn-info" data-toggle="modal" data-target="#showdetaillayanan{{$dpls->id}}"><span class="fas fa-book-open"></span> Lihat Secara Detail</button>
                                    </div>
                                </div>
                            </div>
                            @include('content_frontend.modal.detaillayanan')
                            
                            <!-- End Single Item -->
                            @endforeach
                            {{-- {{$pls->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
            {{ $pls->links('vendor.pagination.custom') }}
            {{-- <div style="align-content:center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    </ul>
                </nav>
            </div> --}}
           
            <!-- End Blog Area -->
            
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

            
            
            
            
            