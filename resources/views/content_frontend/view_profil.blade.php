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
                        <li><a href="{{route('front.profil')}}">Page</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


 <!-- Start Management 
    ============================================= -->
    <div class="management-area default-padding border-top">
        <div class="container">
            <div class="row">
                <!-- Management Content -->
                <div class="col-md-6 content">
                    <h2>Profile Kami</h2>
                    <div class="management-items management-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item" style="text-align: justify">
                            <p>
                                {!!$profil->profile_dinas!!}
                            </p>
                            <div class="author">
                                <div class="thumb">
                                    <img src="https://portal-skpd.sumedangkab.go.id/{{$capaian->foto_kepala_dinas}}" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>{{$identitas->nama_skpd}}</h4>
                                    <span>{{$identitas->alamat}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Management Content -->
                <!-- Our Features -->
                <div class="col-md-6 features text-center">
                    <div class="row">
                        <div class="features-items">
                            <div class="features-content">
                                <!-- Single Item -->
                                <div class="col-sm-6 equal-height" style="height: 255px;">
                                    <div class="item">
                                        <i class="flaticon-process"></i>
                                        <h5><a href="{{route('produk.head')}}">Produk Kantor Layanan Kami</a></h5>
                                    </div>
                                    
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-sm-6 equal-height" style="height: 255px;">
                                    <div class="item">
                                        <i class="flaticon-project-management"></i>
                                        <h5><a href="{{route('front.regulasi')}}">Regulasi Dan Dokumen Publik</a></h5>
                                    </div>
                                </div>
                                <!-- Single Item -->
                                <!-- End Single Item -->
                                <div class="col-sm-6 equal-height" style="height: 255px;">
                                    <div class="item">
                                        <i class="flaticon-insurance"></i>
                                        <h5><a href="{{route('front.berita')}}">Seputar Kami Dalam Berita</a></h5>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-sm-6 equal-height" style="height: 255px;">
                                    <div class="item">
                                        <i class="flaticon-video"></i>
                                        <h5><a href="{{route('front.galeri')}}">Seputar Kami Dalam Galeri</a></h5>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Our Features -->
            </div>
        </div>
    </div>
    <!-- End Management -->
@endsection