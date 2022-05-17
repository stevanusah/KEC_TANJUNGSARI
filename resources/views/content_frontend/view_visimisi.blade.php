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
                        <li class="active">Visi dan Misi</li>
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
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-md-6 features text-center">
                        <h5><strong>Vision / Visi Pemerintahan Kab. Sumedang</strong></h5>
                            <div class="management-items management-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                                <div class="item" style="text-align: justify">
                                    <p>
                                        {!!$profil->visi!!}
                                    </p>
                                </div>
                        <!-- End Single Item -->
                            </div>
                            <h5><strong>Mision / Misi Pemerintahan Kab. Sumedang</strong></h5>
                            <div class="management-items management-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                                <div class="item" style="text-align: justify">
                                    <p>
                                        {!!$profil->misi!!}
                                    </p>
                                </div>
                        <!-- End Single Item -->
                            </div>
                    </div>

                    <div class="col-6">
                        <div class="col-md-6 features text-center">
                            <div class="row">
                                <div class="features-items">
                                    <div class="features-content">
                                        <img src="https://portal-skpd.sumedangkab.go.id/storage/profile/cc-05.png" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Management -->
@endsection