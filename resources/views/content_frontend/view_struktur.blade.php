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
                        <li><a href="{{route('front.struktur')}}">Page</a></li>
                        <li class="active">Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


 <!-- Start Management 
    ============================================= -->
    <div class="default-padding border-top">
        <div class="container">
            <div class="row">
                <!-- Management Content -->
                <div class="col-12">
                    <h3><center>IKU INDIKATOR KINERJA UTAMA</center></h3>
                <hr>
                <hr>
                    <div class="" style="text-align: justify">
                        <p>
                            {!!$profil->iku!!}
                        </p>
                    </div>
                </div>
                
                <div class="col-12">
                    <h3><center>STRUKTUR ORGANISASI</center></h3>
                    <hr>
                    <hr>
                    <div class="" style="align-content:center">
                        <p>
                           <center><img class="thumb" src="https://portal-skpd.sumedangkab.go.id/{{$profil->image_struktur_organisasi}}"></center>
                        </p>
                    </div>
                </div>
                <!-- End Management Content -->

            </div>
        </div>
    </div>
    <!-- End Management -->
@endsection