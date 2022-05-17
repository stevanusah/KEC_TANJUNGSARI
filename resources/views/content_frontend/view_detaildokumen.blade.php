{{-- Dadang --}}
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
                        <li><a href="{{route('front.ppid')}}">Page</a></li>
                        <li class="active">Dokumen Publik PPID</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Start Blog 
        ============================================= -->
        <div class="blog-area full-blog bg-gray default-padding">
            <div class="container">
                <div class="row">
                    <a href="{{route('front.ppid')}}" class="btn btn-primary"><i class="fas fa-angles-left"></i>Kembali</a>
                </div>
                <br>
                <div class="row">
                    <iframe src="https://portal-skpd.sumedangkab.go.id/{{$data->dokumen_file}}" width="100%" height="1200px"></iframe>
                </div>
            </div>
        </div>
        <!-- End Blog -->
        
        @endsection