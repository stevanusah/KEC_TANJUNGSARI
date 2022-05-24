@extends('template_frontend')
@section('content-frontend')
    
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-dark">
        <div id="bootcarousel" class="carousel inc-top-heading content-in slide animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active bg-cover" style="background-image: url(https://portal-skpd.sumedangkab.go.id/storage/slider/creative.png);">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 style="color:white" data-animation="animated slideInDown">Selamat Datang<strong> di</strong> Website Kami</h1>
                                            <h3 style="color:white" data-animation="animated slideInUp"> Sumedang Happiness Factory</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($slider as $slide)

                <div class="item bg-cover" style="background-image: url(https://portal-skpd.sumedangkab.go.id/{{$slide->image_slider}});">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            {{-- <h2 data-animation="animated slideInDown">We are <strong>Providing</strong> Standard Service</h2>
                                            <p data-animation="animated slideInLeft">
                                                {{$slide->description}}
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Details</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
                @endforeach

            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left shadow carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right shadow carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Special Features 
    ============================================= -->
    <div class="special-features bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="sp-features-items">
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <i class="flaticon-resources"></i>
                            <h4>Produk Kantor Layanan Kami!</h4>
                            <a href="{{route('produk.head')}}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <i class="flaticon-quality-assurance"></i>
                            <h4>Regulasi dan Dokumen Publik</h4>
                            <a href="{{route('front.regulasi')}}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <i class="flaticon-businessman-in-apresentation-with-a-graphic-on-a-board"></i>
                            <h4>Seputar Kami dalam Berita</h4>
                            <a href="{{route('front.berita')}}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <i class="flaticon-experiment-results"></i>
                            <h4>Seputar Kami dalam Galeri</h4>
                            <a href="{{route('front.galeri')}}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Special Features -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area shadow-less default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb">
                
                    <img src="https://portal-skpd.sumedangkab.go.id/{{$capaian->foto_kepala_dinas}}" width="100%" height="100%" alt="Thumb">
                </div>
                <div class="col-md-6 info">
                    <div class="heading">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Nilai SAKIP</h3>
                                <h4><b>{{$capaian->nilai_sakip}}</b></h4>
                                
                            </div>
                            <div class="col-lg-6">
                                <h3>Jumlah Pegawai</h3>
                                <h4><b>{{$capaian->jumlah_pegawai}}</b></h4>
                            </div>
                        </div>
                        <h2>Selamat Datang di<br></h2><h4>{{$identitas->nama_skpd}}</h4>
                    </div>
                    <div style="text-align: justify"> 
                        <p>
                            {!!$profil->profile_dinas!!}
                        </p>
                    </div>
                   
                    <ul>
                        <h5><strong>Indikator Utama</strong></h5>
                        <p><b>{{$capaian->indikator_utama}}</b></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 101%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="200">{{$capaian->target}}%</div>
                            </div>             
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Fun Fact Area 
    ============================================= -->
    <div class="fun-facts-area bg-fixed shadow dark text-center" style="background-image: url(https://portal-skpd.sumedangkab.go.id/storage/slider/sumedang.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="{{$capaian->jumlah_pegawai}}" data-speed="1000"></div>
                        <span class="medium">Jumlah Pegawai</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="{{$demografi->jumlah_desa}}" data-speed="1000"></div>
                        <span class="medium">Jumlah Desa</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="{{$demografi->jumlah_penduduk}}" data-speed="1000"></div>
                        <span class="medium">Jumlah Masyarakat</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="10" data-speed="1000"></div>
                        <span class="medium">Jumlah Layanan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Area -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Produk Layanan Terbaru</h2>
                        <p>
                            Produk layanan merupakan Produk apa saja atau Layanan apa saja yang dapat diberikan Kepada Masyarakat, Produk Layanan ini memberikan informasi kepada Masyarakat terkait Persyaratan dan alur dari Layanan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme inc-thumb">

                        @foreach ($detail_layanan as $dtllayanan)
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="https://portal-skpd.sumedangkab.go.id/{{$dtllayanan->alur_prosedur_image}}" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>{{$dtllayanan->nama_layanan}}</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                   Biaya : @if ($dtllayanan->biaya == 0)
                                   Rp. 0,- / Gratis Tanpa Biaya
                                  @endif
                                </pre>
                                <div class="bottom">
                                    <i class="flaticon-digital"></i>
                                    <a href="{{route('produk.detail', $dtllayanan->id)}}" class="btn btn-info">Lihat Selengkapnya ...</a>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- End Services -->


    <!-- Start Blog Area 
    ============================================= -->
    <div class="blog-area bg-white default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Berita Terbaru</h2>
                        <p>
                            Menu yang menyajikan Berita Terbaru yang ada pada Website ini, Berita Lainnya dapat di Akses pada Menu Berita Diatas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                   
                    @foreach ($berita as $beritas)
                    
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="https://portal-skpd.sumedangkab.go.id/{{$beritas->berita_image}}" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    {{$beritas->created_at->format('d M Y')}}
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                           
                                            <a href="#"><i class="fas fa-user"></i>Admin Website</a>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-eye"></i> {{$beritas->views}} kali di Lihat</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">{{$beritas->judul_berita}}</a>
                                </h4>
                                <p>
                                    {!!substr($beritas->description,0,100)!!}
                                </p>
                                <a href="{{route('front.view_detailberita', $beritas->id)}}">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Regulasi dan Dokumen Publik</h2>
                        <p>
                           Menu ini menampilkan Regulasi dan Dokumen, Baik Dokumen Persyaratan atau dokumen yang sifatnya Publik, Masyarakat dapat mendownload nya disini!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme inc-thumb">
                        
                        @foreach ($regulasi as $regulasis)
                            
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('assets_frontend/img/layanan.png')}}" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>{{$regulasis->jenis_regulasi}}</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 {{$regulasis->nama_regulasi}}
                                </p>
                                <h4>
                                <a href="{{route('front.downloadreg', $regulasis->id)}}">Download <i class="fas fa-download"></i></a>
                            </h4>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow bg-white default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Galeri Kami</h2>
                        <p>
                           Menu ini menampilkan Galeri Website berupa Video Youtube, Baik itu Video Kegiatan atau video laiinya!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme inc-thumb">

                        @foreach ($galeri as $galeris)

                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <iframe width="370" height="200" src="{{$galeris->vidio_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="title">
                                    {{-- <a href="#">
                                        <h4>{{$galeris->}}</h4>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 {{$galeris->description}}
                                </p>
                                <div class="bottom">
                                    <i class="flaticon-video"></i>
                                    <a target="_blank" href="{{$galeris->vidio_link}}"> Lihat secara Full <i class="fas fa-video"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                            
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Instagram Kami</h2>
                        <p>
                           Menu ini menampilkan Regulasi dan Dokumen, Baik Dokumen Persyaratan atau dokumen yang sifatnya Publik, Masyarakat dapat mendownload nya disini!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme inc-thumb">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets_frontend/img/reg.png" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>Financial Planning</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 Twenty sister hearts garden limits put gay has. We Desirous exercise overcame procured speaking.
                                </p>
                                <div class="bottom">
                                    <i class="flaticon-digital"></i>
                                    <a href="#">Download <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets_frontend/img/reg.png" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>Investment Planning</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 Twenty sister hearts garden limits put gay has. We Desirous exercise overcame procured speaking.
                                </p>
                                <div class="bottom">
                                    <i class="flaticon-life"></i>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets_frontend/img/reg.png" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>Mutual Funds</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 Twenty sister hearts garden limits put gay has. We Desirous exercise overcame procured speaking.
                                </p>
                                <div class="bottom">
                                    <i class="flaticon-piggy-bank"></i>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets_frontend/img/reg.png" alt="Thumb">
                                <div class="title">
                                    <a href="#">
                                        <h4>Markets Research</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                 Twenty sister hearts garden limits put gay has. We Desirous exercise overcame procured speaking.
                                </p>
                                <div class="bottom">
                                    <i class="flaticon-analytics"></i>
                                    <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

   

    {{-- <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps --> --}}

    {{-- <div id="googleMap" style="width:100%;height:380px;"></div> --}}

    @endsection

