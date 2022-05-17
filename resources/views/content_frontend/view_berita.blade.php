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
                        <li><a href="{{route('front.regulasi')}}">Page</a></li>
                        <li class="active">Berita Publik</li>
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
                <div class="blog-items">
                    @foreach ($berita as $news)
                        
                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6 col-sm-6 equal-height single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="https://portal-skpd.sumedangkab.go.id/{{$news->berita_image}}" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    {{$news->created_at->format('d M Y')}}
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-eye"></i> {{$news->views}} dilihat</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">{{$news->judul_berita}}</a>
                                </h4>
                                <p style="text-align: justify">
                                    {!!substr($news->description,0,300)!!}
                                </p>
                                <a href="{{route('front.view_detailberita', $news->id)}}">Selengkapnya <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    @endforeach

                    
                    {{-- <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <li><a href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
                <div class="col-lg-12 col-md-12">
                    <nav aria-label="">
                        <ul class="">
                            {{ $berita->links('vendor.pagination.custom') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    @endsection