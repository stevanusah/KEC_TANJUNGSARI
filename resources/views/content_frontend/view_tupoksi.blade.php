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
                        <li><a href="{{route('front.visimisi')}}">Page</a></li>
                        <li class="active">Tugas Pokok dan Fungsi</li>
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
                    <h3>Tugas Pokok dan Fungsi Kami</h3>
                    <div class="management-items management-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item" style="text-align: justify">
                            <p>
                                {!!$profil->tupoksi!!}
                            </p>
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
                                <img src="https://portal-skpd.sumedangkab.go.id/storage/slider/tupoksi.jpeg" alt="Thumb">
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