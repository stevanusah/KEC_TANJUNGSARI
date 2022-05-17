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
                        <li><a href="{{route('front.galeri')}}">Page</a></li>
                        <li class="active">Galeri Publik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    
    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- End Mixitup Nav-->

                        <div class="row text-center magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                @foreach ($galeri as $vid)
                                <!-- Single Item -->
                                <div class="pf-item development active">
                                    <div class="item-inner">
                                        {{-- <img src="assets/img/800x800.png" alt="Thumb"> --}}
                                    <iframe width="350" height="250" src="{{$vid->vidio_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        <div class="button">
                                            
                                            <a target="_blank" href="{{$vid->vidio_link}}">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                        <div class="title">
                                            <h4><a href="#">{{$vid->description}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <nav aria-label="">
                        <ul class="">
                            {{ $galeri->links('vendor.pagination.custom') }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!-- End Gallery -->
    @endsection